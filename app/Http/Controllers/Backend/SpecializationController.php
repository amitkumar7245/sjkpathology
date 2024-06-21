<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Strem;
use App\Models\Substrem;
use App\Models\Specialization;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SpecializationController extends Controller
{
    public function SpecializationIndex()
    {
        $data['header_title'] = "Specialization List";
        $specializationList = Specialization::latest()->get();

        return view('admin.specialization.specialization_list', compact('specializationList'), $data);

    }//end method

    public function SpecializationAdd()
    {
        $data['header_title'] = "Specialization Add";
        
        $strem = Strem::orderBy('strem_name','ASC')->get();
        $substrem = Substrem::orderBy('substrem_name','ASC')->get();
        $course = Course::orderBy('course_name','ASC')->get();
        return view('admin.specialization.specialization_add', compact('strem','substrem','course'), $data);

    }//end method

    public function SpecializationStore(Request $request)
    {
        Specialization::insert([
            'strem_id' => $request->strem_id,
            'substrem_id' => $request->substrem_id,
            'course_id' => $request->course_id,
            'specialization_name' => $request->specialization_name,
            'specialization_slug' => strtolower(str_replace(' ','-',$request->specialization_name)),
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
           ]);
    
           $notification = array(
              'message' => 'Specialization Name Inserted Successfully',
              'alert-type' => 'success'
           );
    
        return redirect()->route('all.specialization')->with($notification);
    }//end Method

    public function SpecializationEdit($id)
    {
        $data['header_title'] = "Specialization Name Edit";

        $strem = Strem::orderBy('strem_name','ASC')->get();
        $substrem = Substrem::orderBy('substrem_name','ASC')->get();
        $course = Course::orderBy('course_name','ASC')->get();
        $specialization_id = Specialization::findOrFail($id);
        return view('admin.specialization.specialization_edit',compact('strem','substrem','course','specialization_id'), $data);
    } 
    
    public function SpecializationUpdate(Request $request)
    {
        $specialization_id = $request->id;

        Specialization::findOrFail($specialization_id)->update([
            'strem_id' => $request->strem_id,
            'substrem_id' => $request->substrem_id,
            'course_id' => $request->course_id,
            'specialization_name' => $request->specialization_name,
            'specialization_slug' => strtolower(str_replace(' ','-',$request->specialization_name)),
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Specialization Name Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.specialization')->with($notification);
    }//end method

    public function SpecializationDestory($id)
    {
        Specialization::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Specialization Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.specialization')->with($notification);
    }//end method

    public function SpecializationView($id)
    {
        $data['header_title'] = "Specialization View";

        $specializationView = Specialization::find($id);
        return view('admin.specialization.specialization_view', compact('specializationView'), $data);
    }

    public function SpecializationInactive($id)
    {
        Specialization::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Specialization Name Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function SpecializationActive($id)
    {
        Specialization::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Specialization Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method

    public function GetSpecializationStrem($strem_id)
    {
        $substremcat = Substrem::where('strem_id', $strem_id)->orderBy('substrem_name','ASC')->get();
        return json_encode($substremcat);
    }

    public function GetSpecializationSubstrem($substrem_id)
    {
        $coursecat = Course::where('substrem_id', $substrem_id)->orderBy('course_name','ASC')->get();
        return json_encode($coursecat);
    }
    
}
