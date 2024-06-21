<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reportingtype;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ReportingtypeController extends Controller
{
    public function ReportingtypeIndex()
   {
        $data['header_title'] = "Reporting Type List";

        $reportingtype = Reportingtype::latest()->get();
        return view('admin.reportingtype.reportingtype_list', compact('reportingtype'), $data);

   }//end method

   public function ReportingtypeAdd()
   {
        $data['header_title'] = "Reporting Type Add";

        return view('admin.reportingtype.reportingtype_add', $data);

   }//end method

   public function ReportingtypeStore(Request $request)
   {  
        Reportingtype::insert([
            'reporting_name' => $request->reporting_name,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Reporting Type Name Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.reportingtype')->with($notification);

   }//end method

   public function ReportingtypeEdit($id)
   { 
        $data['header_title'] = "Reporting Type Edit";
        
        $retpotingtype_id = Reportingtype::findOrFail($id);

        return view('admin.reportingtype.reportingtype_edit', compact('retpotingtype_id'), $data);
   }//end method


   public function ReportingtypeUpdate(Request $request)
   {
        $retpotingtypies = $request->id;
        
        Reportingtype::findOrFail($retpotingtypies)->update([
                'reporting_name' => $request->reporting_name,
                'status' => 'active',
                'created_by' => Auth::user()->id,
                'updated_at' => Carbon::now(),
            ]);
    
            $notification = array(
                'message' => 'Reporting Type Name Update Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->route('all.reportingtype')->with($notification);
            
   }//end method

   public function ReportingtypeDestory($id)
   {
        Reportingtype::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Reporting Type Name Deleted Successfully',
            'alert-type' => 'success'
    );

    return redirect()->route('all.reportingtype')->with($notification);

   }//end method

   public function ReportingtypeView($id)
   {
     $data['header_title'] = "Reporting Type View";
     $reportingtype_view = Reportingtype::find($id);

     return view('admin.reportingtype.reportingtype_view',compact('reportingtype_view'), $data);
   }//end method
   
   public function ReportingtypeInactive($id)
   {
     Reportingtype::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Reporting Type Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
   }//end method

   public function ReportingtypeActive($id)
   {
     Reportingtype::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Reporting Type Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
   }//end method


}
