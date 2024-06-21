<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestBlood;
use App\Models\TestbloodGroup;
use App\Models\SampleType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class TestBloodGroupController extends Controller
{
    public function TestBloodGroupIndex()
    {
        $data['header_title'] = "Test Blood Group List";

        $testbloodgroupList = TestbloodGroup::latest()->get();
        return view('admin.test-blood-group.test_blood_group_list', compact('testbloodgroupList'), $data);
    }//end method

    public function TestBloodGroupAdd()
    {
        $data['header_title'] = "Test Blood Group Add";

        $testBlood = TestBlood::orderBy('testblood_name','ASC')->get();
        $testsampletype = SampleType::orderBy('sampletype_name','ASC')->get();
        return view('admin.test-blood-group.test_blood_group_add', compact('testBlood','testsampletype'), $data);

    }//end method

    public function TestBloodGroupStore(Request $request)
    {
        TestbloodGroup::insert([
        'testblood_id' => $request->testblood_id,
        'sampletype_id' => $request->sampletype_id,
        'testbloodgroup_name' => $request->testbloodgroup_name,
        'testbloodgroup_slug' => strtolower(str_replace(' ','-',$request->testbloodgroup_name)),
        'testbloodgroup_code' => $request->testbloodgroup_code,
        'testbloodgroup_price' => $request->testbloodgroup_price,
        'testbloodgroup_precautions' => $request->testbloodgroup_precautions,
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Test Blood Group Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.testbloodgroup')->with($notification);

    }//end method

    public function TestBloodGroupEdit($id)
    {
        $data['header_title'] = "Test Blood Group edit";

        $testBlood = TestBlood::orderBy('testblood_name','ASC')->get();
        $testsampletype = SampleType::orderBy('sampletype_name','ASC')->get();

        $testbloodgroup_id = TestbloodGroup::findOrFail($id);
        return view('admin.test-blood-group.test_blood_group_edit',compact('testBlood','testsampletype','testbloodgroup_id'), $data);

    }//end method

    public function TestBloodGroupUpdate(Request $request)
    {
        $testbloodgroup_id = $request->id;

        TestbloodGroup::findOrFail($testbloodgroup_id)->update([
            'testblood_id' => $request->testblood_id,
            'sampletype_id' => $request->sampletype_id,
            'testbloodgroup_name' => $request->testbloodgroup_name,
            'testbloodgroup_slug' => strtolower(str_replace(' ','-',$request->testbloodgroup_name)),
            'testbloodgroup_code' => $request->testbloodgroup_code,
            'testbloodgroup_price' => $request->testbloodgroup_price,
            'testbloodgroup_precautions' => $request->testbloodgroup_precautions,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Test Blood Group Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testbloodgroup')->with($notification);
    } //end method

    public function TestBloodGroupDestory($id)
    {
        TestbloodGroup::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Test Blood Group Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.testbloodgroup')->with($notification);
    } //end method

    public function TestBloodGroupView($id)
    {
        $data['header_title'] = "Test Blood Group View";

        $testbloodgroupView = TestbloodGroup::find($id);
        return view('admin.test-blood-group.test_blood_group_view', compact('testbloodgroupView'), $data);
    }//end method

    public function TestBloodGroupInactive($id)
    {
        TestbloodGroup::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Test Blood Group Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end method

    public function TestBloodGroupActive($id)
    {
        TestbloodGroup::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Test Blood Group Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end method

}
