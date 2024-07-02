<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\City;
use App\Models\Clinic;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\State;
use App\Models\Course;
use App\Models\Substrem;
use App\Models\Specialization;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Mail\DoctorRegistered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Helpers\TokenHelper;
use App\Models\Strem;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;


class DoctorController extends Controller
{
    public function DoctorIndex()
    {
        $data['header_title'] = "Doctor List";

        $doctorlist = User::where('role', 'doctor')->with('doctor.creator')->latest()->get();
        return view('admin.doctor.doctor_list', compact('doctorlist'), $data);
    }

    public function DoctorAdd()
    {
        $data['header_title'] = "Doctor Add";

        $bankdetails = Bank::latest()->get();
        $countries = Country::latest()->get();
        $states = State::latest()->get();
        $city = City::latest()->get();
        $strem = Strem::latest()->get();
        $substrem = Substrem::latest()->get();
        $course = Course::latest()->get();
        $specialization = Specialization::latest()->get();

        return view('admin.doctor.doctor_add', compact('bankdetails', 'countries', 'states', 'city', 'strem', 'substrem', 'course', 'specialization'), $data);
    }

    public function DoctorStore(Request $request)
    {
        DB::beginTransaction();
        try {
            // Handle image upload

            $doctorImage = $request->file('photo');
            $name_gen = date('YmdHi') . $doctorImage->getClientOriginalName();
            $doctorImage->move(public_path('upload/doctor_images/'), $name_gen);
            $save_url = 'upload/doctor_images/' . $name_gen;

            // Optionally resize image
            $manager = new ImageManager(new Driver());
            $img = $manager->read(public_path('upload/doctor_images/' . $name_gen));
            $img->resize(100, 100);
            $img->save(public_path('upload/doctor_images/' . $name_gen));

            // Create a new user
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
                'photo' => $save_url,
                'role' => 'doctor',
                'created_by' => Auth::user()->id,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ]);

            // Create a new doctor
            Doctor::create([
                'doctoruser_id' => $user->id,
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'strem_id' => $request->strem_id,
                'substrem_id' => $request->substrem_id,
                'course_id' => $request->course_id,
                'specialization_id' => $request->specialization_id,
                'locationname' => $request->location,
                'bankname_id' => $request->bankname_id,
                'branchname' => $request->branchname,
                'ifsccode' => $request->ifsccode,
                'accountnumber' => $request->accountnumber,
                'accountholdername' => $request->accountholdername,
                'commission' => $request->commission,
                'reg_number' => $request->regnumber,
                'license_number' => $request->licensenumber,
                'created_by' => Auth::user()->id,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ]);

            // Create a new clinic
            Clinic::create([
                'clinicuser_id' => $user->id,
                'clinic_name' => $request->clinicname,
                'clinicowner_name' => $request->clinicownername,
                'gst_number' => $request->gstnumber ?? '0000000000',
                'phone_number' => $request->phonenumber ?? '0000000000',
                'telephonephone_number' => $request->telephonenumber ?? '0000000000',
                'clinic_email' => $request->clinicemail ?? 'default@clinic.com',
                'latitude' => $request->latitude ?? 0.0,
                'longitude' => $request->longitude ?? 0.0,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'clinic_address' => $request->clinicaddress ?? 'Default Address',
                'created_by' => Auth::user()->id,
                'status' => 'active',
                'created_at' => Carbon::now(),
            ]);

            // Commit the transaction
            DB::commit();

            // Send email to the user
            Mail::to($user->email)->send(new DoctorRegistered($user));

            // Redirect back with a success message
            $notification = array(
                'message' => 'Doctor registered successfully and email sent',
                'alert-type' => 'success'
            );

            return redirect()->route('all.doctor')->with($notification);
        } catch (\Exception $e) {
            // Rollback the transaction if any error occurs
            DB::rollBack();

            // Redirect back with an error message
            return redirect()->route('all.doctor')->withErrors(['error' => 'An error occurred while registering the doctor: ' . $e->getMessage()]);
        }
    }



    public function DoctorEdit($id)
    {
        $data['header_title'] = "Doctor Edit";
        $bank = Bank::latest()->get();
        $countries = Country::latest()->get();
        $states = State::latest()->get();
        $city = City::latest()->get();
        $strem = Strem::latest()->get();
        $substrem = Substrem::latest()->get();
        $course = Course::latest()->get();
        $specialization = Specialization::latest()->get();
        $doctor_id = User::with('doctor', 'clinic')->findOrFail($id);

        return view('admin.doctor.doctor_edit', compact('doctor_id', 'bank', 'countries', 'states', 'city', 'strem', 'substrem', 'course', 'specialization'), $data);
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

        // Find and update the doctor details
        $doctor = Doctor::where('doctoruser_id', $request->id)->firstOrFail();
        $doctor->update([
            'reg_number' => $request->regnumber,
            'license_number' => $request->licensenumber,
            'bankname_id' => $request->bankname_id,
            'branchname' => $request->branchname,
            'ifsccode' => $request->ifsccode,
            'accountnumber' => $request->accountnumber,
            'accountholdername' => $request->accountholdername,
            'commission' => $request->commission,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'locationname' => $request->location,
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
        $doctor->clinic()->delete();
        $doctor->delete();

        $notification = array(
            'message' => 'Doctor updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.doctor')->with($notification);
    }

    public function DoctorView($id)
    {
        $data['header_title'] = "Doctor View";
        $doctor_view = User::with(['doctor.country', 'doctor.state', 'doctor.city', 'doctor.bank', 'clinic.state', 'clinic.city'])->findOrFail($id);
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

        $clinic = Clinic::where('clinicuser_id', $id)->first();
        if ($clinic) {
            $clinic->update(['status' => 'inactive']);
        }

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

        $clinic = Clinic::where('clinicuser_id', $id)->first();
        if ($clinic) {
            $clinic->update(['status' => 'active']);
        }

        $user = User::findOrFail($id);
        $user->update(['status' => 'active']);

        $notification = array(
            'message' => 'Doctor Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function GetDoctorStrem($strem_id)
    {
        $doctorstrem = Substrem::where('strem_id', $strem_id)->orderBy('substrem_name', 'ASC')->get();
        return json_encode($doctorstrem);
    }

    public function GetDoctorSubstrem($substrem_id)
    {
        $doctorsubstrem = Course::where('substrem_id', $substrem_id)->orderBy('course_name', 'ASC')->get();
        return json_encode($doctorsubstrem);
    }

    public function GetDoctorCourse($course_id)
    {
        $doctorspecialization = Specialization::where('course_id', $course_id)->orderBy('specialization_name', 'ASC')->get();
        return json_encode($doctorspecialization);
    }


    public function GetDoctorState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method


    public function GetDoctorCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method

}
