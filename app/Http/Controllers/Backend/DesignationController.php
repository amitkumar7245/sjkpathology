<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class DesignationController extends Controller
{
    public function DesignationIndex()
    {
        $data['header_title'] = "Designation List";

        $designation = Designation::latest()->get();
        return view('admin.designation.designation_list', compact('designation'), $data);

    }//end method

    public function DesignationAdd()
    {
        $data['header_title'] = "Designation Add";

        return view('admin.designation.designation_add', $data);
    }

    public function DesignationStore(Request $request)
    {
        Designation::insert([
        'designation_name' => $request->designation_name,
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Designation Name Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.designation')->with($notification);

    }//end method

    public function DesignationEdit($id)
    {
        $data['header_title'] = "Designation Edit";

        $designationies = Designation::findOrFail($id);
        return view('admin.designation.designation_edit',compact('designationies'), $data);

    }//end method

    public function DesignationUpdate(Request $request)
    {
        $designation_id = $request->id;

        Designation::findOrFail($designation_id)->update([
            'designation_name' => $request->designation_name,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Designation Name Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.designation')->with($notification);
    }//end method

    public function DesignationDestory($id)
    {
        Designation::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Designation Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.designation')->with($notification);
    }//end method

    public function DesignationView($id)
   {
        $data['header_title'] = "Designation View";

        $designation_view = Designation::find($id);
        return view('admin.designation.designation_view',compact('designation_view'), $data);
   } 

   public function DesignationInactive($id)
    {
        Designation::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Designation Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function DesignationActive($id)
    {
        Designation::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Designation Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method

}
