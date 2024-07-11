<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\Zone;
use App\Models\State;
use App\Models\Hospital;
use App\Helpers\TokenHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HospitalController extends Controller
{
    public function HospitalIndex()
    {
        $data['header_title'] = "Hospital List";

        $hospitalList = User::where('role', 'hospital')->latest()->get();
        return view('admin.hospital.hospital_list', compact('hospitalList'), $data);
    }

    public function HospitalAdd()
    {
        $data['header_title'] = "Hospital Add";

        $states = State::where('status', 'active')->latest()->get();
        $city = City::latest()->get();
        $zone = Zone::where('status', 'active')->latest()->get();
        $diagnostic = User::where('role', 'diagnostic')->where('status', 'active')->latest()->get();

        return view('admin.hospital.hospital_add', compact('states', 'city', 'zone', 'diagnostic'), $data);   
    }

    public function HospitalStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $token = TokenHelper::token();

        $user = User::create([
            'reg_number' => 'H-' . $token,
            'name' => ucfirst(trim($request->full_name)),
            'username' => strtolower(str_replace(' ', '_', $request->full_name)),
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'doj' => $request->doj,
            'dob' => $request->dob,
            'password' => Hash::make($request->password),
            'role' => 'hospital',
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

        Hospital::create([
            'hospitaluser_id' => $user->id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'locationname' => $request->location,
            'diagnostic_id' => $request->diagnostic_id,
            'zonename_id' => $request->zonename_id,
            'specialtest' => $request->specialtest,
            'routetest' => $request->routetest,
            'diagnosspecialtest' => $request->diagnosspecialtest,
            'diagnosroutetest' => $request->diagnosroutetest,
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Hospital registered successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.hospital')->with($notification);
    }


    public function HospitalEdit($id)
    {
        $data['header_title'] = "Hospital Edit";

        $states = State::where('status', 'active')->latest()->get();
        $city = City::latest()->get();
        $zone = Zone::where('status', 'active')->latest()->get();
        $diagnostic = User::where('role', 'diagnostic')->where('status', 'active')->latest()->get();

        $hospital_id = User::with('hospital')->findOrFail($id);

        return view('admin.hospital.hospital_edit',compact('states', 'city', 'zone', 'diagnostic', 'hospital_id'), $data);
    }


    public function HospitalUpdate(Request $request)
    {
        // Log the request data for debugging
        Log::info('Received Request Data:', $request->all());

        $user = User::findOrFail($request->id);

        if ($request->hasFile('photo')) {
            $hospitalImage = $request->file('photo');
            $name_gen = date('YmdHi') . $hospitalImage->getClientOriginalName();

            // Delete old image
            if ($user->photo && file_exists(public_path($user->photo))) {
                File::delete(public_path($user->photo));
            }

            // Save new image
            $hospitalImage->move(public_path('upload/hospital_images/'), $name_gen);
            $user->photo = 'upload/hospital_images/' . $name_gen;
        }

        // Find and update the user
        $user->update([
            'name' => ucfirst(trim($request->full_name)),
            'username' => strtolower(str_replace(' ', '_', $request->full_name)),
            'email' => $request->email,
            'phone' => $request->phone,
            'dob' => Carbon::parse($request->dob),
            'doj' => Carbon::parse($request->doj),
            'address' => $request->address,
            'photo' => $user->photo,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        // Find and update the doctor details
        $hospital = Hospital::where('hospitaluser_id', $request->id)->firstOrFail();
        $hospital->update([
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'locationname' => $request->location,
            'diagnostic_id' => $request->diagnostic_id,
            'zonename_id' => $request->zonename_id,
            'specialtest' => $request->specialtest,
            'routetest' => $request->routetest,
            'diagnosspecialtest' => $request->diagnosspecialtest,
            'diagnosroutetest' => $request->diagnosroutetest,
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Hospital updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.hospital')->with($notification);
    }

    public function HospitalDestory($id)
    {
        $hospital = User::findOrFail($id);
        $hospital->delete();

        $notification = array(
            'message' => 'Hospital Deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.hospital')->with($notification);
    }

    public function HospitalView($id)
    {
        $data['header_title'] = "Hospital View";
        
        $hospital_view = User::with(['hospital.state', 'hospital.city', 'hospital.zone'])->findOrFail($id);
        
        return view('admin.hospital.hospital_view', compact('hospital_view'), $data);
    }

    public function HospitalInactive($id)
    {
        $hospital = Hospital::where('hospitaluser_id', $id)->firstOrFail();
        $hospital->update(['status' => 'inactive']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Hospital Inactivated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function HospitalActive($id)
    {
        $hospital = Hospital::where('hospitaluser_id', $id)->firstOrFail();
        $hospital->update(['status' => 'active']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'active']);

        $notification = array(
            'message' => 'Hospital Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function HospitalcheckPhone(Request $request)
    {
        $exists = User::where('phone', $request->phone)->exists();
        return response()->json($exists ? 'true' : 'false');
    }

    public function GetHospitalCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->where('status', 'active')->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method
}
