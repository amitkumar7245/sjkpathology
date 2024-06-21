<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UnitTypeController extends Controller
{
    public function TestUnitTypeIndex()
    {
        $data['header_title'] = "Test Unit Type List";

        $unitTypeList = UnitType::latest()->get();
        return view('admin.test-unit-type.test_unit_type_list', compact('unitTypeList'), $data);
    } //end method

    public function TestUnitTypeAdd()
    {
        $data['header_title'] = "Test Unit Type Add";

        return view('admin.test-unit-type.test_unit_type_add', $data);
    } //end method

    public function TestUnitTypeStore(Request $request)
    {
        UnitType::insert([
            'unittype_name' => $request->unittype_name,
            'unittype_code' => $request->unittype_code,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Test Unit Type Name Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testunittype')->with($notification);
    } //end method

    public function TestUnitTypeEdit($id)
    {
        $data['header_title'] = "Test Unit Type Name Edit";

        $unittype_id = UnitType::findOrFail($id);
        return view('admin.test-unit-type.test_unit_type_edit', compact('unittype_id'), $data);
    } //end method

    public function TestUnitTypeUpdate(Request $request)
    {
        $unittype_id = $request->id;

        UnitType::findOrFail($unittype_id)->update([
            'unittype_name' => $request->unittype_name,
            'unittype_code' => $request->unittype_code,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Test Unit Type Name Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testunittype')->with($notification);
    } //end method

    public function TestUnitTypeDestory($id)
    {
        UnitType::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Test Unit Type Name Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testunittype')->with($notification);
    } //end method

    public function TestUnitTypeView($id)
    {
        $data['header_title'] = "Test Unit Type View";

        $unittypeView = UnitType::find($id);
        return view('admin.test-unit-type.test_unit_type_view', compact('unittypeView'), $data);
    }

    public function TestUnitTypeInactive($id)
    {
        UnitType::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Test Unit Type Name Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end method

    public function TestUnitTypeActive($id)
    {
        UnitType::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Test Unit Type Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end method


}
