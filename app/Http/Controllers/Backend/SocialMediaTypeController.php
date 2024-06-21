<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialmediaType;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class SocialMediaTypeController extends Controller
{
    public function SocialMediaTypeIndex()
    {
        $data['header_title'] = "Social Media Type List";

        $socialmediatype = SocialmediaType::latest()->get();
        return view('admin.socialmediatype.socialmediatype_list', compact('socialmediatype'), $data);

    }//end method

    public function SocialMediaTypeAdd()
    {
        $data['header_title'] = "Social Media Type Add";

        return view('admin.socialmediatype.socialmediatype_add', $data);

    }//end method

    public function SocialMediaTypeStore(Request $request)
    {
        SocialmediaType::insert([
        'socialtype_name' => $request->socialtype_name,
        'socialtype_slug' => strtolower(str_replace(' ','-',$request->socialtype_name)),
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Social Media Type Name Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.socialmediatype')->with($notification);

    }//end method

    public function SocialMediaTypeEdit($id)
    {
        $data['header_title'] = "Social Media Type Edit";

        $socialmediatypies = SocialmediaType::findOrFail($id);
        return view('admin.socialmediatype.socialmediatype_edit',compact('socialmediatypies'), $data);

    }//end method

    public function SocialMediaTypeUpdate(Request $request)
    {
        $socialmediatype_id = $request->id;

        SocialmediaType::findOrFail($socialmediatype_id)->update([
            'socialtype_name' => $request->socialtype_name,
            'socialtype_slug' => strtolower(str_replace(' ','-',$request->socialtype_name)),
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Social Media Type Name Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.socialmediatype')->with($notification);
    }//end method

    public function SocialMediaTypeDestory($id)
    {
        SocialmediaType::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Social Media Type Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.socialmediatype')->with($notification);
    }//end method

    public function SocialMediaTypeView($id)
    {
        $data['header_title'] = "Social Media Type View";

        $socialmediatype_view = SocialmediaType::find($id);
        return view('admin.socialmediatype.socialmediatype_view', compact('socialmediatype_view'), $data);
    }

    public function SocialMediaTypeInactive($id)
    {
        SocialmediaType::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Social Media Type Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function SocialMediaTypeActive($id)
    {
        SocialmediaType::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Social Media Type Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method

}
