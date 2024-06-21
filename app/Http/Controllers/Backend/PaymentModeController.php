<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paymentmode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PaymentModeController extends Controller
{
   
    public function PaymentmodeIndex()
    {
         $data['header_title'] = "Payment Mode List";
 
         $paymentmode = Paymentmode::latest()->get();
         return view('admin.payment_mode.payment_mode_all', compact('paymentmode'),$data);
    }//end method
 
    public function PaymentmodeAdd()
    {
        $data['header_title'] = "Payment Mode Create";
        return view('admin.payment_mode.payment_mode_add', $data);
 
    }//end method
 
    public function PaymentmodeStore(Request $request)
    {
         Paymentmode::insert([
             'paymentmode_name' => $request->paymentmode_name,
             'paymentmode_desc' => $request->descripton,
             'status' => 'active',
             'created_by' => Auth::user()->id,
             'created_at' => Carbon::now(),
             ]);
 
             $notification = array(
                 'message' => 'Payment Mode Name Inserted Successfully',
                 'alert-type' => 'success' 
             );
 
         return redirect()->route('all.paymentmode')->with($notification);
 
    }//end method
 
    public function PaymentmodeEdit($id)
    {
        $data['header_title'] = "Payment Mode Edit";
 
        $paymentmode_id = Paymentmode::findOrFail($id);
        return view('admin.payment_mode.payment_mode_edit',compact('paymentmode_id'), $data,);
    }//end method
 
    public function PaymentmodeUpdate(Request $request)
    {
        $payment_id = $request->id;
 
        Paymentmode::findOrFail($payment_id)->update([
             'paymentmode_name' => $request->paymentmode_name,
             'paymentmode_desc' => $request->descripton,
             'status' => 'active',
             'created_by' => Auth::user()->id,
             'updated_at' => Carbon::now(),
             ]);
 
             $notification = array(
                 'message' => 'Payment Mode Name Update Successfully',
                 'alert-type' => 'success' 
             );
 
         return redirect()->route('all.paymentmode')->with($notification);
 
    }//end method
 
    public function PaymentmodeDestory($id)
    {
        Paymentmode::findOrFail($id)->delete();
 
            $notification = array(
                'message' => 'Payment Mode Name Deleted Successfully',
                'alert-type' => 'success' 
            );
            return redirect()->route('all.paymentmode')->with($notification);
 
    }//end method
   
    public function PaymentmodeView($id)
    {
         $data['header_title'] = "Payment Mode View";
 
         $paymentmode_view = Paymentmode::find($id);
         return view('admin.payment_mode.payment_mode_view', compact('paymentmode_view') ,$data);
    }
 
    public function PaymentmodeInactive($id)
     {
         Paymentmode::findOrFail($id)->update(['status' => 'inactive']);
 
         $notification = array(
             'message' => 'Payment Mode Inactive',
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification);
 
     }//end method
     
     public function PaymentmodeActive($id)
     {
         Paymentmode::findOrFail($id)->update(['status' => 'active']);
 
         $notification = array(
             'message' => 'Payment Mode Active',
             'alert-type' => 'success'
         );
 
         return redirect()->back()->with($notification);
 
     }//end method

}
