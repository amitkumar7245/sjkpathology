<?php

namespace App\Http\Controllers\Backend;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Pathdoctor;
use App\Helpers\TokenHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Mail\DoctorRegistered;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PathdoctorController extends Controller
{
    public function DoctorsIndex()
    {
        $data['header_title'] = "Doctor List";

        $doctorslist = User::where('role', 'doctor')->with('pathdoctor.creator')->latest()->get();
        return view('admin.doctors.doctors_list', compact('doctorslist'), $data);
    }
    public function DoctorsAdd()
    {
        $data['header_title'] = "Doctor Add";

        $countries = Country::latest()->get();
        $states = State::latest()->get();
        $city = City::latest()->get();

        return view('admin.doctors.doctors_add', compact('countries', 'states', 'city'), $data);
    }

    public function DoctorsStore(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if (!empty($request->photo)) {
            $doctorsProfile = $request->photo;
            $name_gen = date('YmdHi') . $doctorsProfile->getClientOriginalName();
            $doctorsProfile->move(public_path('upload/doctors_images'),$name_gen);
            $doctorsProfile->photo = 'upload/doctors_images/'.$name_gen;

            $manager = new ImageManager(new Driver());
            $img = $manager->read(public_path('upload/doctors_images/'.$name_gen));
        
            $img->resize(100,100);
            $img->save(public_path('upload/doctors_images/'.$name_gen));
        }

        $token = TokenHelper::token();
        $user = User::create([
            'reg_number' => 'D-' . $token,
            'name' => $request->full_name,
            'username' => strtolower(str_replace(' ', '_', $request->full_name)),
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'doj' => $request->doj,
            'dob' => $request->dob,
            'aadharnumber' => $request->aadharcard,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'photo' => $doctorsProfile->photo,
            'role' => 'doctor',
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);
        Pathdoctor::create([
            'doctoruser_id' => $user->id,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'specialization' => $request->specialization,
            'locationname' => $request->location,
            'commission' => $request->commission,
            'registration_number' => $request->regnumber,
            'license_number' => $request->licensenumber,
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

        Mail::to($user->email)->send(new DoctorRegistered($user));

        $notification = array(
            'message' => 'Doctor registered successfully and email sent',
            'alert-type' => 'success'
        );

        return redirect()->route('all.doctors')->with($notification);
    }

    public function DoctorsEdit($id)
    {
        $data['header_title'] = "Doctor Edit";

        $countries = Country::latest()->get();
        $states = State::latest()->get();
        $city = City::latest()->get();
        $doctors_id = User::with('doctor')->findOrFail($id);

        return view('admin.doctors.doctors_edit', compact('doctors_id', 'countries', 'states', 'city'), $data);
    }

    public function DoctorsUpdate(Request $request)
    {

        $doctors_id = $request->id;

        $user = User::findOrFail($doctors_id);

        if ($request->hasFile('photo')) {
            $doctorsImage = $request->file('photo');
            $name_gen = date('YmdHi') . $doctorsImage->getClientOriginalName();

            // Delete old image
            if ($user->photo && file_exists(public_path($user->photo))) {
                File::delete(public_path($user->photo));
            }

            // Save new image
            $doctorsImage->move(public_path('upload/doctors_images/'), $name_gen);
            $user->photo = 'upload/doctors_images/' . $name_gen;
        }

        $user->update([
            'name' => $request->full_name,
            'username' => strtolower(str_replace(' ', '-', $request->full_name)),
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dob' => Carbon::parse($request->dob),
            'doj' => Carbon::parse($request->doj),
            'aadharnumber' => $request->aadharcard,
            'address' => $request->address,
            'photo' => $user->photo,
            'status' => 'active',
            'created_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        $pathdoctor = Pathdoctor::where('doctoruser_id', $doctors_id)->firstOrFail();
        $pathdoctor->update([
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'specialization' => $request->specialization,
            'locationname' => $request->location,
            'commission' => $request->commission,
            'registration_number' => $request->regnumber,
            'license_number' => $request->licensenumber,
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Doctor updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.doctors')->with($notification);
    }


    public function DoctorsDestory($id)
    {
        $doctor = User::findOrFail($id);
        $doctor->delete();

        $notification = array(
            'message' => 'Doctor Deleted successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.doctors')->with($notification);
    }
    public function DoctorsView($id)
    {
        $data['header_title'] = "Doctor View";
        $doctors_view = User::with(['doctor.country', 'doctor.state', 'doctor.city'])->findOrFail($id);
        return view('admin.doctors.doctors_view', compact('doctors_view'), $data);
    }
    public function DoctorsPrint($id)
    {
        $doctorsAgreement = User::find($id);
        $pdf = Pdf::loadView('admin.doctorspdf.doctorsinvoice', compact('doctorsAgreement'));
        return $pdf->download('doctorinvoice.pdf');
    }
    public function DoctorsInactive($id)
    {
        $pathdoctor = Pathdoctor::where('doctoruser_id', $id)->firstOrFail();
        $pathdoctor->update(['status' => 'inactive']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Doctor Inactivated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function DoctorsActive($id)
    {
        $pathdoctor = Pathdoctor::where('doctoruser_id', $id)->firstOrFail();
        $pathdoctor->update(['status' => 'active']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'active']);

        $notification = array(
            'message' => 'Doctor Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function checkPhone(Request $request)
    {
        $exists = User::where('phone', $request->phone)->exists();
        return response()->json($exists ? 'true' : 'false');
    }

    public function GetDoctorsState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method

    public function GetDoctorsCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method
}
