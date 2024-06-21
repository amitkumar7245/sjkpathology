<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestBlood;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TestBloodController extends Controller
{
    public function TestBloodIndex()
    {
        $data['header_title'] = "Test Blood List";
        $testBloodList = TestBlood::latest()->get();
        return view('admin.test-blood.test_blood_list', compact('testBloodList'), $data);
    }

    public function TestBloodAdd()
    {
        $data['header_title'] = "Test Blood Add";

        return view('admin.test-blood.test_blood_add', $data);

    }//end method

    public function TestBloodStore(Request $request)
    {
        TestBlood::insert([
        'testblood_name' => $request->testblood_name,
        'testblood_slug' => strtolower(str_replace(' ','-',$request->testblood_name)),
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Test Blood Name Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.testblood')->with($notification);

    }//end method

    public function TestBloodEdit($id)
    {
        $data['header_title'] = "Test Blood Name Edit";

        $testblood_id = TestBlood::findOrFail($id);
        return view('admin.test-blood.test_blood_edit',compact('testblood_id'), $data);

    }//end method

    public function TestBloodUpdate(Request $request)
    {
        $testblood_id = $request->id;

        TestBlood::findOrFail($testblood_id)->update([
            'testblood_name' => $request->testblood_name,
            'testblood_slug' => strtolower(str_replace(' ','-',$request->testblood_name)),
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Test Blood Name Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.testblood')->with($notification);
    }//end method

    public function TestBloodDestory($id)
    {
        TestBlood::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Test Blood Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.testblood')->with($notification);
    }//end method

    public function TestBloodView($id)
    {
        $data['header_title'] = "Test Blood View";

        $testbloodView = TestBlood::find($id);
        return view('admin.test-blood.test_blood_view', compact('testbloodView'), $data);
    }

    public function TestBloodInactive($id)
    {
        TestBlood::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Test Blood Name Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function TestBloodActive($id)
    {
        TestBlood::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Test Blood Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method

}
