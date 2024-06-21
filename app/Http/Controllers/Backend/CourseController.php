<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Strem;
use App\Models\Substrem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function CourseIndex()
    {
        $data['header_title'] = "Course List";

        $courseList = Course::latest()->get();
        return view('admin.course.course_list', compact('courseList'), $data);

    }//end method

    public function CourseAdd()
    {
        $data['header_title'] = "Course Add";
        
        $strem = Strem::orderBy('strem_name','ASC')->get();
        $substrem = Substrem::orderBy('substrem_name','ASC')->get();
        return view('admin.course.course_add', compact('strem','substrem'), $data);

    }//end method

    public function CourseStore(Request $request)
    {
        Course::insert([
        'strem_id' => $request->strem_id,
        'substrem_id' => $request->substrem_id,
        'course_name' => $request->course_name,
        'course_slug' => strtolower(str_replace(' ','-',$request->course_name)),
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Course Name Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.course')->with($notification);

    }//end method

    public function CourseEdit($id)
    {
        $data['header_title'] = "Course Name Edit";

        $strem = Strem::orderBy('strem_name','ASC')->get();
        $substrem = Substrem::orderBy('substrem_name','ASC')->get();
        $course_id = Course::findOrFail($id);
        return view('admin.course.course_edit',compact('strem','substrem','course_id'), $data);

    }//end method

    public function CourseUpdate(Request $request)
    {
        $course_id = $request->id;

        Course::findOrFail($course_id)->update([
            'strem_id' => $request->strem_id,
            'substrem_id' => $request->substrem_id,
            'course_name' => $request->course_name,
            'course_slug' => strtolower(str_replace(' ','-',$request->course_name)),
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Course Name Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.course')->with($notification);
    }//end method

    public function CourseDestory($id)
    {
        Course::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Course Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.course')->with($notification);
    }//end method

    public function CourseView($id)
    {
        $data['header_title'] = "Course View";

        $courseView = Course::find($id);
        return view('admin.course.course_view', compact('courseView'), $data);
    }

    public function CourseInactive($id)
    {
        Course::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Course Name Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function CourseActive($id)
    {
        Course::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Course Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method


    public function GetCourseStrem($strem_id){   

        $substremcat = Substrem::where('strem_id',$strem_id)->orderBy('substrem_name','ASC')->get();
        return json_encode($substremcat);

    }// End Method
}
