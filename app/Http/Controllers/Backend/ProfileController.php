<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Collection;
use App\Models\Diagnostic;
use App\Models\Staff;
use App\Models\Clinic;
use App\Models\Department;
use App\Models\Designation;
use App\Models\EmployeeType;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function AdminProfile()
    {
        $data['header_title'] = "Admin Profile";

        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view', compact('adminData'), $data);
    } //end method

    public function AdminProfileStore(Request $request)
    {
        $rules = [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . Auth::user()->id . ',id',

        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = strtolower(str_replace(' ', '-', $request->name));
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->doj = $request->doj;
        $data->dob = $request->dob;
        $data->aadharnumber = $request->aadharcard;
        $data->address = $request->address;

        if (!empty($request->photo)) {

            File::delete(public_path('upload/admin_images/' . $data->photo));
            File::delete(public_path('upload/admin_images/profile/' . $data->photo));

            $file = $request->photo;
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);

            $data['photo'] = $filename;

            $manager = new ImageManager(Driver::class);
            $img = $manager->read(public_path('upload/admin_images/' . $filename));

            $img->cover(150, 150);
            $img->save(public_path('upload/admin_images/profile/' . $filename));
        }

        $data->save();

        $notification = array(
            'message' => "Admin Profile Successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end admin profile






    public function DoctorProfile()
    {
        $data['header_title'] = "Doctor Profile";

        $id = Auth::user()->id;
        // $countries = Country::latest()->get();
        $states = State::latest()->get();
        $doctorData = User::with('doctor')->find($id);
        // $doctorData = User::with('doctor')->find($id);

        // $states = [];
        $cities = [];

        if ($doctorData && $doctorData->doctor) {
            // $states = State::where('country_id', $doctorData->doctor->country_id)->get();
            $cities = City::where('state_id', $doctorData->doctor->state_id)->get();
        }

        return view('doctor.doctor_profile_view', compact('doctorData', 'states', 'cities'), $data);
    }

    public function DoctorProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->username = strtolower(str_replace(' ', '-', $request->name));
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->gender = $request->gender;
        $data->doj = $request->doj;
        $data->dob = $request->dob;
        $data->aadharnumber = $request->aadharcard;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            if (File::exists(public_path($data->photo))) {
                File::delete(public_path($data->photo));
            }
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/doctors_images/'), $filename);
            $data['photo'] = 'upload/doctors_images/' . $filename;
        }


        $data->save();

        $notification = array(
            'message' => "Doctor Basic Profile Successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end mehod



    public function DoctorLocationStore(Request $request)
    {
        //  dd($request->all());

        $doctor = Auth::user()->doctor;
        if ($doctor) {
            $doctor->update([
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'locationname' => $request->location,
            ]);
        }

        $notification = array(
            'message' => "Doctor Location updated successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function GetDoctorProfileState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method


    public function GetDoctorProfileCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method


    public function DoctorCheckPhone(Request $request)
    {
        $exists = User::where('phone', $request->phone)->exists();
        return response()->json($exists ? 'true' : 'false');
    }








    public function StaffProfile()
    {
        $data['header_title'] = "Staff Profile";

        $id = Auth::user()->id;
        $countries = Country::latest()->get();
        $banks = Bank::latest()->get();
        $staffData = User::with('staff')->find($id);

        $states = [];
        $cities = [];

        if ($staffData && $staffData->staff) {
            $states = State::where('country_id', $staffData->staff->country_id)->get();
            $cities = City::where('state_id', $staffData->staff->state_id)->get();
        }

        return view('staff.staff_profile_view', compact('staffData', 'countries', 'banks', 'states', 'cities'), $data);
    }

    public function StaffProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = strtolower(str_replace(' ', '-', $request->name));
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->gender = $request->gender;
        $data->doj = $request->doj;
        $data->dob = $request->dob;
        $data->aadharnumber = $request->aadharcard;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            if (File::exists(public_path($data->photo))) {
                File::delete(public_path($data->photo));
            }
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/staff_images'), $filename);
            $data['photo'] = 'upload/staff_images/' . $filename;
        }

        $data->save();

        $notification = array(
            'message' => "Staff Basic Profile Updated Successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end mehod

    public function StaffLocationStore(Request $request)
    {
        $staff = Auth::user()->staff;
        if ($staff) {
            $staff->update([
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'locationname' => $request->locationname,
            ]);
        }

        $notification = array(
            'message' => "Staff Location updated successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function staffcheckPhone(Request $request)
    {
        $exists = User::where('phone', $request->phone)->exists();
        return response()->json($exists ? 'true' : 'false');
    }


    public function GetStaffProfileState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method


    public function GetStaffProfileCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method






    public function PatientProfile()
    {
        $data['header_title'] = "Patient Center Profile";

        $id = Auth::user()->id;
        $patientData = User::find($id);

        return view('patient.patient_profile_view', compact('patientData'), $data);
    }

    public function PatientProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->username = strtolower(str_replace(' ', '-', $request->name));
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->gender = $request->gender;
        $data->doj = $request->doj;
        $data->dob = $request->dob;
        $data->aadharnumber = $request->aadharcard;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            if (File::exists(public_path($data->photo))) {
                File::delete(public_path($data->photo));
            }
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/patient_images/'), $filename);
            $data['photo'] = 'upload/patient_images/' . $filename;
        }

        $data->save();

        $notification = array(
            'message' => "Patient Basic Profile Successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end mehod 


    public function GetPatientProfileState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method


    public function GetPatientProfileCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method


    public function PatientCheckPhone(Request $request)
    {
        $exists = User::where('phone', $request->phone)->exists();
        return response()->json($exists ? 'true' : 'false');
    }







    public function DiagnosticProfile()
    {
        $data['header_title'] = "Diagnostic Center Profile";

        $id = Auth::user()->id;
        $countries = Country::latest()->get();
        $diagnosticData = User::with('diagnostic')->find($id);



        $states = [];
        $cities = [];

        if ($diagnosticData && $diagnosticData->diagnostic) {
            $states = State::where('country_id', $diagnosticData->diagnostic->country_id)->get();
            $cities = City::where('state_id', $diagnosticData->diagnostic->state_id)->get();
        }

        return view('diagnostic.diagnostic_profile_view', compact('diagnosticData', 'countries', 'states', 'cities'), $data);
    }

    public function DiagnosticProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->username = strtolower(str_replace(' ', '-', $request->name));
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->doj = $request->doj;
        $data->aadharnumber = $request->aadharcard;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            if (File::exists(public_path($data->photo))) {
                File::delete(public_path($data->photo));
            }
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/diagnostic_images/'), $filename);
            $data['photo'] = 'upload/diagnostic_images/' . $filename;
        }

        $data->save();

        $notification = array(
            'message' => "Diagnostic Center Basic Profile Successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end mehod

    public function DiagnosticLocationStore(Request $request)
    {

        $diagnostic = Auth::user()->diagnostic;
        if ($diagnostic) {
            $diagnostic->update([
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'locationname' => $request->locationname,
            ]);
        }

        $notification = array(
            'message' => "Diagnostic Center Location updated successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function diagnosticcheckPhone(Request $request)
    {
        $exists = User::where('phone', $request->phone)->exists();
        return response()->json($exists ? 'true' : 'false');
    }


    public function GetDiagnosticProfileState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method


    public function GetDiagnosticProfileCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method





    public function CollectionProfile()
    {
        $data['header_title'] = "Collection Center Profile";

        $id = Auth::user()->id;
        $countries = Country::latest()->get();
        $collectionData = User::with('collection')->find($id);

        $states = [];
        $cities = [];

        if ($collectionData && $collectionData->collection) {
            $states = State::where('country_id', $collectionData->collection->country_id)->get();
            $cities = City::where('state_id', $collectionData->collection->state_id)->get();
        }

        return view('collection.collection_profile_view', compact('collectionData', 'countries', 'states', 'cities'), $data);
    }

    public function CollectionProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->username = strtolower(str_replace(' ', '-', $request->name));
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->doj = $request->doj;
        $data->aadharnumber = $request->aadharcard;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            if (File::exists(public_path($data->photo))) {
                File::delete(public_path($data->photo));
            }
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/collection_images/'), $filename);
            $data['photo'] = 'upload/collection_images/' . $filename;
        }


        $data->save();

        $notification = array(
            'message' => "Collection Center Basic Profile Successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } //end mehod

    public function CollectionLocationStore(Request $request)
    {
        $collection = Auth::user()->collection;
        if ($collection) {
            $collection->update([
                'country_id' => $request->country_id,
                'state_id' => $request->state_id,
                'city_id' => $request->city_id,
                'locationname' => $request->locationname,
            ]);
        }

        $notification = array(
            'message' => "Collection Center Location updated successfully",
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function collectioncheckPhone(Request $request)
    {
        $exists = User::where('phone', $request->phone)->exists();
        return response()->json($exists ? 'true' : 'false');
    }

    public function GetCollectionProfileState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method


    public function GetCollectionProfileCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method


    //  public function Profile()
    // {
    //     $data['header_title'] = "Staff Profile";

    //     $id = Auth::user()->id;
    //     $user = Auth::user();

    //     if ($user->role == 'admin') {
    //         $data['profileData'] = User::find($id); 

    //     } elseif ($user->role == 'doctor') {
    //         $data['profileData'] = Doctor::find($id);
    //     } elseif ($user->role == 'staff') {
    //         $data['profileData'] = Staff::find($id);
    //     } elseif ($user->role == 'patient') {
    //         $data['profileData'] = Patient::find($id);
    //     } elseif ($user->role == 'diagnostic') {
    //         $data['profileData'] = Diagnostic::find($id);
    //     } elseif ($user->role == 'collection') {
    //         $data['profileData'] = Collection::find($id); 
    //     } else {
    //         $data['profileData'] = $user;
    //     }

    //     return view('layout.header', $data);
    // }



}
