<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmployeeType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class EmployeeTypeController extends Controller
{
    public function EmployeetypeIndex()
    {
        $data['header_title'] = "Employee Type List";

        $employeetype = EmployeeType::latest()->get();
        return view('admin.employeetype.employeetype_list', compact('employeetype'),$data);

    }//end method

    public function EmployeetypeAdd()
    {
        $data['header_title'] = "Employee Type Create";
        return view('admin.employeetype.employeetype_add', $data);

    }//end method

    public function EmployeetypeStore(Request $request)
    {
        EmployeeType::insert([
           'employee_type_name' => $request->employeetype_name,
           'status' => 'active',
           'created_by' => Auth::user()->id,
           'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Employee Type Name Inserted Successfully',
            'alert-type' => 'success' 
        );

        return redirect()->route('all.employeetype')->with($notification);

    }//end method

    public function EmployeeTypeEdit($id)
    {
        $data['header_title'] = "Employee Type Edit";

        $emp_type = EmployeeType::findOrFail($id);
        return view('admin.employeetype.employeetype_edit', compact('emp_type'), $data);
    }//end method

    public function EmployeeTypeUpdate(Request $request)
    {
        $emp_type_id = $request->id;

        EmployeeType::findOrFail($emp_type_id)->update([
           'employee_type_name' => $request->employeetype_name,
           'status' => 'active',
           'created_by' => Auth::user()->id,
           'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Employee Type Name Update Successfully',
            'alert-type' => 'success' 
        );

        return redirect()->route('all.employeetype')->with($notification);

    }//end method

    public function EmployeetypeDestory($id)
    {
        EmployeeType::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Employee Type Name Deleted Successfully',
            'alert-type' => 'success' 
        );
        return redirect()->route('all.employeetype')->with($notification);

    }//end method

    public function EmployeetypeView($id)
    {
        $data['header_title'] = "Employee Type View";

        $employee_view = EmployeeType::find($id);

        return view('admin.employeetype.employeetype_view',compact('employee_view'), $data);
    }

    public function EmployeetypeInactive($id)
    {
        EmployeeType::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Employee Type Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function EmployeetypeActive($id)
    {
        EmployeeType::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Employee Type Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
}
