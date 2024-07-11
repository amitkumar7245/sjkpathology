<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Zone;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ZoneController extends Controller
{
    public function ZoneIndex()
    {
        $data['header_title'] = "Zone List";
        $zoneList = Zone::latest()->get();
        return view('admin.zone.zone_list', compact('zoneList'), $data);
    }

    public function ZoneStore(Request $request)
    {
        Zone::insert([
        'zone_name' => ucfirst($request->zone_name),
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Zone Name Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.zone')->with($notification);

    }//end method

    public function ZoneEdit($id)
    {
        $data['header_title'] = "Zone Edit";

        $zone_id = Zone::findOrFail($id);
        return view('admin.zone.zone_edit',compact('zone_id'), $data);

    }//end method

    public function ZoneUpdate(Request $request)
    {
        $testblood_id = $request->id;

        Zone::findOrFail($testblood_id)->update([
            'zone_name' => ucfirst($request->zone_name),
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Zone Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.zone')->with($notification);
    }//end method

    public function ZoneDestory($id)
    {
        Zone::findOrFail($id)->delete();

         $notification = array(
            'message' => 'Zone Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.zone')->with($notification);
    }//end method

    public function ZoneView($id)
    {
        $data['header_title'] = "Zone Name View";

        $zoneView = Zone::find($id);
        return view('admin.zone.zone_view', compact('zoneView'), $data);
    }

    public function ZoneInactive($id)
    {
        Zone::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Zone Name Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function ZoneActive($id)
    {
        Zone::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Zone Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method


}
