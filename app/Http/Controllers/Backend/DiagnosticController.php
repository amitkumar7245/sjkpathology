<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
use App\Models\Diagnostic;
use App\Models\State;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DiagnosticController extends Controller
{
    public function DiagnosticCenterIndex()
    {
        $data['header_title'] = "Diagnostic Center List";

        $diagnosticCenters = User::with('diagnostic')->where('role', 'diagnostic')->get();

        return view('admin.diagnostic-center.diagnostic_list', compact('diagnosticCenters'), $data);
    }

    public function DiagnosticCenterAdd()
    {
        $data['header_title'] = "Diagnostic Center Add";

        $countries = Country::latest()->get();
        $states = State::latest()->get();
        $city = City::latest()->get();

        return view('admin.diagnostic-center.diagnostic_add', compact('countries','states','city'), $data);
    }


    public function DiagnosticCenterStore(Request $request)
    {
        // dd($request->all());
        $diagnosticuser_id = User::insertGetId([
            'reg_number' => mt_rand(100000,999999),
            'name' => $request->name,
            'username' => strtolower(str_replace(' ','-',$request->name)),
            'phone' => $request->phone,
            'email' => $request->email,
            'doj' => $request->doj,
            'aadharnumber' => $request->aadharcard,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            // 'photo' => $save_url,
            'role' => 'diagnostic',
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
          ]);

        Diagnostic::insert([
            'diauser_id' => $diagnosticuser_id,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'locationname' => $request->location_name,
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);  

        $notification = array(
            'message' => 'Diagnostic Center Registration Successfully',
            'alert-type' => 'success'
        );
        
        return redirect()->route('all.diagnosticcenter')->with($notification);

    }//end method

    public function DiagnosticCenterEdit($id)
    {
        $data['header_title'] = "Diagnostic Center Edit";

        $userdiagnostiCenters = User::with(['diagnostic.city', 'diagnostic.state', 'diagnostic.country'])->findOrFail($id);

        // $userdiagnostiCenters = User::with(['diagnostic.city', 'diagnostic.state', 'diagnostic.country'])->whereId($id)->first();
        // dd($userdiagnostiCenters);
        $countries = Country::all();
        $states = State::where('country_id', $userdiagnostiCenters->diagnostic->country_id)->get();
        $cities = City::where('state_id', $userdiagnostiCenters->diagnostic->state_id)->get();
        
        return view('admin.diagnostic-center.diagnostic_edit', compact('userdiagnostiCenters', 'countries', 'states', 'cities'), $data);
    }


    public function DiagnosticCenterUpdate(Request $request)
    {
        $diagnosticCenters_id = $request->id;
    
        // dd($request->all());

        $user = User::findOrFail($diagnosticCenters_id);
        $user->update([
            'name' => $request->name,
            'username' => strtolower(str_replace(' ', '-', $request->name)),
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address, 
            'doj' => $request->doj, 
            'aadharnumber' => $request->aadharcard, 
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);
    
        // Update diagnostics table
        $diagnostic = Diagnostic::where('diauser_id', $diagnosticCenters_id)->firstOrFail();
        $diagnostic->update([
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'locationname' => $request->location_name,
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'updated_at' => Carbon::now(),
        ]);
    
        $notification = [
            'message' => 'Diagnostic Center Updated Successfully',
            'alert-type' => 'success',
        ];
    
        return redirect()->route('all.diagnosticcenter')->with($notification);
    }

    public function DiagnosticCenterDestory($id)
    {
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Diagnostic Center Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }//end method

    public function DiagnosticCenterView($id)
    {
        $data['header_title'] = "Diagnostic Center View";

        $diagnostic_view = User::with('diagnostic')->findOrFail($id);
        return view('admin.diagnostic-center.diagnostic_view', compact('diagnostic_view'), $data);
    }

    public function DiagnosticCenterInactive($id)
    {
        $diagnostic = Diagnostic::where('diauser_id', $id)->firstOrFail();
        $diagnostic->update(['status' => 'inactive']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Diagnostic Center Inactivated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DiagnosticCenterActive($id)
    {
        $diagnostic = Diagnostic::where('diauser_id', $id)->firstOrFail();
        $diagnostic->update(['status' => 'active']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'active']);

        $notification = array(
            'message' => 'Diagnostic Center Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function GetDiagnosticState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name','ASC')->get();
        return json_encode($staties);
    }// End Method

    public function GetDiagnosticCity($state_id)
    {
        $cities = City::where('state_id',$state_id)->orderBy('city_name','ASC')->get();
        return json_encode($cities);
    }// End Method
}
