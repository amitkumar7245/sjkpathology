<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Strem;
use Illuminate\Http\Request;
use App\Models\Substrem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class SubstreamController extends Controller
{
    public function SubstremIndex()
    {
        $data['header_title'] = "Substrem List";

        $substremList = Substrem::latest()->get();
        return view('admin.substrem.substrem_list', compact('substremList'), $data);
    } //end method

    public function SubstremAdd()
    {
        $data['header_title'] = "Substrem Add";
        $strem = Strem::orderBy('strem_name', 'ASC')->get();
        return view('admin.substrem.substrem_add', compact('strem'), $data);
    } //end method

    public function SubstremStore(Request $request)
    {
        Substrem::insert([
            'strem_id' => $request->strem_id,
            'substrem_name' => $request->substrem_name,
            'substrem_slug' => strtolower(str_replace(' ', '-', $request->substrem_name)),
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Substrem Name Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.substrem')->with($notification);
    } //end method

    public function SubstremEdit($id)
    {
        $data['header_title'] = "Substrem Name Edit";

        $strem = Strem::orderBy('strem_name', 'ASC')->get();
        $substrem_id = Substrem::findOrFail($id);
        return view('admin.substrem.substrem_edit', compact('strem', 'substrem_id'), $data);
    } //end method

    public function SubstremUpdate(Request $request)
    {
        $substrem_id = $request->id;

        Substrem::findOrFail($substrem_id)->update([
            'strem_id' => $request->strem_id,
            'substrem_name' => $request->substrem_name,
            'substrem_slug' => strtolower(str_replace(' ', '-', $request->substrem_name)),
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Substrem Name Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.substrem')->with($notification);
    } //end method

    public function SubstremDestory($id)
    {
        Substrem::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Substrem Name Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.substrem')->with($notification);
    } //end method

    public function SubstremView($id)
    {
        $data['header_title'] = "Substrem View";

        $substremView = Substrem::find($id);
        return view('admin.substrem.substrem_view', compact('substremView'), $data);
    }

    public function SubstremInactive($id)
    {
        Substrem::findOrFail($id)->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Substrem Name Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end method

    public function SubstremActive($id)
    {
        Substrem::findOrFail($id)->update(['status' => 'active']);

        $notification = array(
            'message' => 'Substrem Name Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end method
}
