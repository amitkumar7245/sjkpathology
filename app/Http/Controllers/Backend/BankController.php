<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;


class BankController extends Controller
{
    public function AllBank()
    {
        $data['header_title'] = "Bank List";
        $banks = Bank::latest()->get();
        return view('admin.bank.bank_list',compact('banks'),$data);
    }

    public function AddBank()
    {
        $data['header_title'] = "Bank Add";
        return view('admin.bank.bank_add',$data);
    }//end method

    public function StoreBank(Request $request)
    {
        $rules = [
            'bankcode' => 'required',
        ];
        
        if (!empty($request->image)){
            $rules['banklogo'] = 'photo';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('add.bank')->withInput()->withErrors($validator);
        }

        if (!empty($request->photo)) {

            $banklogo = $request->photo;
            $name_gen = hexdec(uniqid()).'.'.$banklogo->getClientOriginalExtension();
            $banklogo->move(public_path('upload/bank_images/'),$name_gen);
            $save_url = 'upload/bank_images/'.$name_gen;

            $manager = new ImageManager(new Driver());
            $img = $manager->read(public_path('upload/bank_images/'.$name_gen));
        
            $img->resize(100,100);
            $img->save(public_path('upload/bank_images/thumb/'.$name_gen));
        }

        Bank::insert([
          'bankname' => $request->bankname,
          'bank_slug' => strtolower(str_replace(' ','-',$request->bankname)),
          'bankcode' => $request->bankcode,
          'banklogo' => $save_url,
          'created_by' => Auth::user()->id,
          'status' => 'active',
          'created_at' => Carbon::now(),
        ]);


        $notificaton = array(
            'message' => 'Bank Name Inserted Successfully',
            'alert-type' => 'success'
            );
        
        return redirect()->route('all.bank')->with($notificaton);
    }//end method

    public function EditBank($id)
    {
       $data['header_title'] = "Bank Edit";

       $bankies = Bank::findOrFail($id);
       return view('admin.bank.bank_edit', compact('bankies'),$data);
    }//end method

    public function UpdateBank(Request $request)
    {
        $bank_id = $request->id;

        $rules = [
            'bankname' => 'required',
            'bankcode' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('edit.bank', ['id' => $bank_id])->withInput()->withErrors($validator);
        }

        $bank = Bank::findOrFail($bank_id);
        $save_url = $bank->banklogo; // Default to the current bank logo

        if ($request->hasFile('photo')) {
            $banklogo = $request->file('photo');
            $name_gen = hexdec(uniqid()).'.'.$banklogo->getClientOriginalExtension();

        // Delete old image
        if ($bank->banklogo) {
            File::delete(public_path($bank->banklogo));
            File::delete(public_path('upload/bank_images/thumb/'.basename($bank->banklogo)));
        }

        // Save new image
        $banklogo->move(public_path('upload/bank_images/'), $name_gen);
        $save_url = 'upload/bank_images/'.$name_gen;

        // Create thumbnail
        $manager = new ImageManager(new Driver());
        $img = $manager->read(public_path('upload/bank_images/'.$name_gen));
        $img->resize(50,50);
        $img->save(public_path('upload/bank_images/thumb/'.$name_gen));

    }

    $bank->update([
        'bankname' => $request->bankname,
        'bank_slug' => strtolower(str_replace(' ', '-', $request->bankname)),
        'bankcode' => $request->bankcode,
        'banklogo' => $save_url,
        'created_by' => Auth::user()->id,
        'status' => 'active',
        'updated_at' => Carbon::now(),
    ]);

    $notification = [
        'message' => 'Bank Name Updated Successfully',
        'alert-type' => 'success'
    ];

    return redirect()->route('all.bank')->with($notification);
    }//end method
    

    public function DeleteBank($id)
    {
      $Bank = Bank::findOrFail($id);
      $img = $Bank->banklogo;
      unlink($img);

      Bank::findOrFail($id)->delete();

      $notification = array(
        'message' => 'Bank Name Deleted Successfully',
        'alert-type' => 'success',
      );
      return redirect()->back()->with($notification);

    }//end method

    public function BankView($id)
    {
        $data['header_title'] = "Bank View";

        $bank_view = Bank::find($id);
        return view('admin.bank.bank_view',compact('bank_view'), $data);
    }

    public function BankInactive($id)
    {
        Bank::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Bank Name Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function BankActive($id)
    {
        Bank::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Bank Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
