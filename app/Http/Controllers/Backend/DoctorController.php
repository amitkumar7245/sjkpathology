<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\Zone;
use App\Models\State;
use App\Models\Doctor;
use App\Helpers\TokenHelper;
use Illuminate\Http\Request;
use App\Mail\DoctorRegistered;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Drivers\Gd\Driver;


class DoctorController extends Controller
{
    public function DoctorIndex()
    {
        $data['header_title'] = "Doctor List";

        $doctorlist = User::where('role', 'doctor')->with('doctor.creator')->latest()->get();
        return view('admin.doctor.doctor_list', compact('doctorlist'), $data);
    }

    public function DoctorCommission()
    {
        $data['header_title'] = "Doctor Commission List";

        $doctorcommission = User::where('role', 'doctor')->with(['doctor.zone'])->latest()->get();
        $zone = Zone::where('status', 'active')->latest()->get();
        return view('admin.doctor.doctor_commission_list',compact('doctorcommission','zone'), $data);
    }

    public function DoctorAdd()
    {
        $data['header_title'] = "Doctor Add";

        $states = State::where('status', 'active')->latest()->get();
        $city = City::latest()->get();
        $zone = Zone::where('status', 'active')->latest()->get();
        $diagnostic = User::where('role', 'diagnostic')->where('status', 'active')->latest()->get();

        return view('admin.doctor.doctor_add', compact('states', 'city', 'zone', 'diagnostic'), $data);
    }


    public function DoctorStore(Request $request)
    {
        // dd($request->all());

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
            'reg_number' => 'D-' . $token,
            'name' => ucfirst(trim($request->full_name)),
            'username' => strtolower(str_replace(' ', '_', $request->full_name)),
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'doj' => $request->doj,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'role' => 'doctor',
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

        Doctor::create([
            'doctoruser_id' => $user->id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'specialization' => $request->specialization,
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

        Mail::to($user->email)->send(new DoctorRegistered($user));

        $notification = array(
            'message' => 'Doctor registered successfully and email sent',
            'alert-type' => 'success'
        );

        return redirect()->route('all.doctor')->with($notification);
    }

    public function DoctorEdit($id)
    {
        $data['header_title'] = "Doctor Edit";

        $states = State::where('status', 'active')->latest()->get();
        $city = City::latest()->get();
        $zone = Zone::where('status', 'active')->latest()->get();
        $diagnostic = User::where('role', 'diagnostic')->where('status', 'active')->latest()->get();
        $doctor_id = User::with('doctor')->findOrFail($id);

        return view('admin.doctor.doctor_edit', compact('doctor_id', 'states', 'city', 'zone', 'diagnostic'), $data);
    }


    public function DoctorUpdate(Request $request)
    {
        // Log the request data for debugging
        Log::info('Received Request Data:', $request->all());

        $user = User::findOrFail($request->id);

        if ($request->hasFile('photo')) {
            $doctorsImage = $request->file('photo');
            $name_gen = date('YmdHi') . $doctorsImage->getClientOriginalName();

            // Delete old image
            if ($user->photo && file_exists(public_path($user->photo))) {
                File::delete(public_path($user->photo));
            }

            // Save new image
            $doctorsImage->move(public_path('upload/doctor_images/'), $name_gen);
            $user->photo = 'upload/doctor_images/' . $name_gen;
        }

        // Find and update the user
        $user->update([
            'name' => ucfirst(trim($request->full_name)),
            'username' => strtolower(str_replace(' ', '_', $request->full_name)),
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dob' => Carbon::parse($request->dob),
            'doj' => Carbon::parse($request->doj),
            'address' => $request->address,
            'photo' => $user->photo,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        // Find and update the doctor details
        $doctor = Doctor::where('doctoruser_id', $request->id)->firstOrFail();
        $doctor->update([
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'specialization' => $request->specialization,
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
            'message' => 'Doctor updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.doctor')->with($notification);
    }

    public function DoctorDestory($id)
    {
        $doctor = User::findOrFail($id);
        $doctor->delete();

        $notification = array(
            'message' => 'Doctor Deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.doctor')->with($notification);
    }

    public function DoctorView($id)
    {
        $data['header_title'] = "Doctor View";
        $doctor_view = User::with(['doctor.state', 'doctor.city', 'doctor.zone'])->findOrFail($id);
        return view('admin.doctor.doctor_view', compact('doctor_view'), $data);
    }

    public function DoctorPrint($id)
    {
        $doctorAgreement = User::find($id);
        $pdf = Pdf::loadView('admin.pdf.doctorinvoice', compact('doctorAgreement'));
        return $pdf->download('doctorinvoice.pdf');
    }

    public function DoctorInactive($id)
    {
        $doctor = Doctor::where('doctoruser_id', $id)->firstOrFail();
        $doctor->update(['status' => 'inactive']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Doctor Inactivated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DoctorActive($id)
    {
        $doctor = Doctor::where('doctoruser_id', $id)->firstOrFail();
        $doctor->update(['status' => 'active']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'active']);

        $notification = array(
            'message' => 'Doctor Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    
    public function GetDoctorState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method


    public function GetDoctorCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->where('status', 'active')->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method

}
