<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Strem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class StremController extends Controller
{
    public function StremIndex()
    {
        $data['header_title'] = "Strem List";

        $stremList = Strem::latest()->get();
        return view('admin.strem.strem_list', compact('stremList'), $data);

    }//end method

    public function StremAdd()
    {
        $data['header_title'] = "Strem Add";

        return view('admin.strem.strem_add', $data);

    }//end method

    public function StremStore(Request $request)
    {
        Strem::insert([
        'strem_name' => $request->strem_name,
        'strem_slug' => strtolower(str_replace(' ','-',$request->strem_name)),
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Strem Name Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.strem')->with($notification);

    }//end method

    public function StremEdit($id)
    {
        $data['header_title'] = "Strem Name Edit";

        $strem_id = Strem::findOrFail($id);
        return view('admin.strem.strem_edit',compact('strem_id'), $data);

    }//end method

    public function StremUpdate(Request $request)
    {
        $strem_id = $request->id;

        Strem::findOrFail($strem_id)->update([
            'strem_name' => $request->strem_name,
            'strem_slug' => strtolower(str_replace(' ','-',$request->strem_name)),
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Strem Name Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.strem')->with($notification);
    }//end method

    public function StremDestory($id)
    {
        Strem::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Strem Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.strem')->with($notification);
    }//end method

    public function StremView($id)
    {
        $data['header_title'] = "Strem View";

        $stremView = Strem::find($id);
        return view('admin.strem.strem_view', compact('stremView'), $data);
    }

    public function StremInactive($id)
    {
        Strem::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Strem Name Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function StremActive($id)
    {
        Strem::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Strem Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
}
