<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SampleType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SampleTypeController extends Controller
{
    public function TestSampleTypeIndex()
    {
        $data['header_title'] = "Lab Test Sample Type List";

        $sampleTypeList = SampleType::latest()->get();
        return view('admin.lab-test-sample-type.lab_test_sample_type_list',compact('sampleTypeList'), $data);
    }

    public function TestSampleTypeAdd()
    {
        $data['header_title'] = "Lab Test Sample Type Add";

        return view('admin.lab-test-sample-type.lab_test_sample_type_add', $data);

    }//end method

    public function TestSampleTypeStore(Request $request)
    {
        SampleType::insert([
        'sampletype_name' => $request->sampletype_name,
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Test Sample Type Name Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.testsampletype')->with($notification);

    }//end method

    public function TestSampleTypeEdit($id)
    {
        $data['header_title'] = "Lab Test Sample Type Name Edit";

        $sampletype_id = SampleType::findOrFail($id);
        return view('admin.lab-test-sample-type.lab_test_sample_type_edit',compact('sampletype_id'), $data);

    }//end method

    public function TestSampleTypeUpdate(Request $request)
    {
        $sampletype_id = $request->id;

        SampleType::findOrFail($sampletype_id)->update([
            'sampletype_name' => $request->sampletype_name,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Test Sample Type Name Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.testsampletype')->with($notification);
    }//end method

    public function TestSampleTypeDestory($id)
    {
        SampleType::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Test Sample Type Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.testsampletype')->with($notification);
    }//end method

    public function TestSampleTypeView($id)
    {
        $data['header_title'] = "Lab Test Sample Type View";

        $sampleTypeView = SampleType::find($id);
        return view('admin.lab-test-sample-type.lab_test_sample_type_view', compact('sampleTypeView'), $data);
    }

    public function TestSampleTypeInactive($id)
    {
        SampleType::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Test Sample Type Name Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function TestSampleTypeActive($id)
    {
        SampleType::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Test Sample Type Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
}
