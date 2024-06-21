<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Source;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PathologySourceController extends Controller
{
    public function PathologySourceIndex()
    {
        $data['header_title'] = "Pathology Sources List";

        $sources = Source::latest()->get();
        return view('admin.pathology-sources.pathology_sources_list', compact('sources'), $data);
    }

    public function PathologySourceAdd()
    {
        $data['header_title'] = "Pathology Sources Add";
        return view('admin.pathology-sources.pathology_sources_add', $data);
    }//end method

    public function PathologySourceStore(Request $request)
    {
        Source::insert([
        'source_name' => $request->source_name,
        'status' => 'active',
        'created_by' => Auth::user()->id,
        'created_at' => Carbon::now(),
       ]);

       $notification = array(
          'message' => 'Pathology Sources Inserted Successfully',
          'alert-type' => 'success'
       );

       return redirect()->route('all.pathologysource')->with($notification);

    }//end method

    public function PathologySourceEdit($id)
    {
        $data['header_title'] = "Pathology Sources Name Edit";

        $source_id = Source::findOrFail($id);
        return view('admin.pathology-sources.pathology_sources_edit',compact('source_id'), $data);

    }//end method

    public function PathologySourceUpdate(Request $request)
    {
        $source_id = $request->id;

        Source::findOrFail($source_id)->update([
            'source_name' => $request->source_name,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Pathology Sources Name Update Successfully',
            'alert-type' => 'success'
         );
  
         return redirect()->route('all.pathologysource')->with($notification);
    }//end method

    public function PathologySourceDestory($id)
    {
        Source::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Pathology Sources Name Deleted Successfully',
            'alert-type' => 'success'
         );
   
        return redirect()->route('all.pathologysource')->with($notification);
    }//end method


    public function PathologySourceView($id)
    {
        $data['header_title'] = "Pathology Sources View";

        $sourcesView = Source::find($id);
        return view('admin.pathology-sources.pathology_sources_view', compact('sourcesView'), $data);
    }


    public function PathologySourceInactive($id)
    {
        Source::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Pathology Sources Name Inactive',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }//end method

    public function PathologySourceActive($id)
    {
        Source::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Pathology Sources Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method

}
