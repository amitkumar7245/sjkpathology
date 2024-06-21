<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function DepartmentIndex()
    {
        $data['header_title'] = "Department List";

        $department = Department::latest()->get();
        return view('admin.department.department_list', compact('department'), $data);

    }//end method

    public function DepartmentAdd()
    {
        $data['header_title'] = "Department Add";

        return view('admin.department.department_add', $data);

    }//end method

    public function DepartmentStore(Request $request)
    {
       Department::insert([
        'department_name' => $request->department_name,
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Department Name Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.department')->with($notification);

    }//end method

    public function DepartmentEdit($id)
    {
        $data['header_title'] = "Department Edit";

        $departmenties = Department::findOrFail($id);
        return view('admin.department.department_edit',compact('departmenties'), $data);

    }//end method

    public function DepartmentUpdate(Request $request)
    {
        $department_id = $request->id;

        Department::findOrFail($department_id)->update([
            'department_name' => $request->department_name,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Department Name Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.department')->with($notification);
    }//end method

    public function DepartmentDestory($id)
    {
        Department::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Department Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.department')->with($notification);
    }//end method

    public function DepartmentView($id)
    {
        $data['header_title'] = "Department View";

        $department_view = Department::find($id);
        return view('admin.department.department_view', compact('department_view'), $data);
    }//end method

    
    public function DepartmentInactive($id)
    {
        Department::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Department Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function DepartmentActive($id)
    {
        Department::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Department Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method

}
