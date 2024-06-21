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

        return view('admin.admin_profile_view',compact('adminData'), $data);
    }//end method

    public function AdminProfileStore(Request $request)
    {
        $rules = [
                'name' => 'required|min:3',
                'email' => 'required|email|unique:users,email,'.Auth::user()->id.',id',

        ];
        
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()) {
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

            File::delete(public_path('upload/admin_images/'.$data->photo));
            File::delete(public_path('upload/admin_images/profile/'.$data->photo));

            $file = $request->photo;
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);

            $data['photo'] = $filename;

            $manager = new ImageManager(Driver::class);
            $img = $manager->read(public_path('upload/admin_images/'.$filename)); 
           
            $img->cover(150, 150);
            $img->save(public_path('upload/admin_images/profile/'.$filename));
        }

        $data->save();

       $notification = array(
        'message' => "Admin Profile Successfully",
        'alert-type' => 'success'
       );

       return redirect()->back()->with($notification);

    }//end admin profile






    public function DoctorProfile()
    {
        $data['header_title'] = "Doctor Profile";
        $id = Auth::user()->id;
        $countries = Country::latest()->get();
        $banks = Bank::latest()->get();
        $doctorData = User::with('doctor', 'clinics')->find($id);
        // $doctorData = User::with('doctor')->find($id);

        $states = [];
        $cities = [];

        if ($doctorData && $doctorData->doctor) {
            $states = State::where('country_id', $doctorData->doctor->country_id)->get();
            $cities = City::where('state_id', $doctorData->doctor->state_id)->get();
        }

        return view('doctor.doctor_profile_view', compact('doctorData', 'countries', 'states', 'cities', 'banks'), $data);
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

        if($request->file('photo')) {
        $file = $request->file('photo');
        @unlink(public_path('upload/doctor_images/'.$data->photo));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/doctor_images'),$filename);
        $data['photo'] = $filename;
        }
    
        $data->save();
    
        $notification = array(
        'message' => "Doctor Basic Profile Successfully",
        'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }//end mehod



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

    public function DoctorBankStore(Request $request)
    {
        $doctor = Auth::user()->doctor;
        if ($doctor) {
            $doctor->update([
                'bankname_id' => $request->bankname,
                'branchname' => $request->branchname,
                'ifsccode' => $request->ifsccode,
                'accountnumber' => $request->accountnumber,
                'accountholdername' => $request->accountholdername,
                'commission' => $request->commission,
            ]);
        }
        $notification = array(
            'message' => "Bank details updated successfully",
            'alert-type' => 'success'
            );
        
        return redirect()->back()->with($notification);

    }


    public function DoctorClinicStore(Request $request)
    {
        if ($request->filled('clinic_id')) {
            $clinic = Clinic::findOrFail($request->input('clinic_id'));
        } else {
            $clinic = new Clinic();
        }

        $clinic->clinicuser_id = $request->clinicuser_id;
        $clinic->clinic_name = $request->clinicname;
        $clinic->clinicowner_name = $request->clinicownername;
        $clinic->gst_number = $request->gstnumber;
        $clinic->clinic_email = $request->clinic_email;
        $clinic->phone_number = $request->phonenumber;
        $clinic->telephonephone_number = $request->telephonenumber;
        $clinic->state_id = $request->state_id;
        $clinic->city_id = $request->city_id;
        $clinic->latitude = $request->latitude;
        $clinic->longitude = $request->longitude;
        $clinic->clinic_address = $request->clinicaddress;
        $clinic->created_by = Auth::user()->id;

        $clinic->save();
        
        $notification = array(
            'message' => "Clinic details " . ($request->filled('clinic_id') ? 'updated' : 'saved') . " successfully",
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);    
    }





    public function GetDoctorProfileState($country_id)
    {
        $staties = State::where('country_id',$country_id)->orderBy('state_name','ASC')->get();
        return json_encode($staties);
    }// End Method


    public function GetDoctorProfileCity($state_id)
    {
        $cities = City::where('state_id',$state_id)->orderBy('city_name','ASC')->get();
        return json_encode($cities);
    }// End Method




    public function StaffProfile()
    {
        $data['header_title'] = "Staff Profile";

        $id = Auth::user()->id;
        $staffData = User::find($id);

        return view('staff.staff_profile_view',compact('staffData'), $data);
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

        if($request->file('photo')) {
        $file = $request->file('photo');
        @unlink(public_path('upload/staff_images/'.$data->photo));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/staff_images'),$filename);
        $data['photo'] = $filename;
        }
    
        $data->save();
    
        $notification = array(
        'message' => "Staff Basic Profile Successfully",
        'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }//end mehod










    public function PatientProfile()
    {
        $data['header_title'] = "Patient Center Profile";

        $id = Auth::user()->id;
        $patientData = User::find($id);

        return view('patient.patient_profile_view',compact('patientData'), $data);
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

        if($request->file('photo')) {
        $file = $request->file('photo');
        @unlink(public_path('upload/patient_images/'.$data->photo));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/patient_images'),$filename);
        $data['photo'] = $filename;
        }
    
        $data->save();
    
        $notification = array(
        'message' => "Patient Basic Profile Successfully",
        'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }//end mehod 










    public function DiagnosticProfile()
    {
        $data['header_title'] = "Diagnostic Center Profile";

        $id = Auth::user()->id;
        $diagnosticData = User::find($id);

        return view('diagnostic.diagnostic_profile_view',compact('diagnosticData'), $data);
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

        if($request->file('photo')) {
        $file = $request->file('photo');
        @unlink(public_path('upload/diagnostic_images/'.$data->photo));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/diagnostic_images'),$filename);
        $data['photo'] = $filename;
        }
        $data->save();
    
        $notification = array(
        'message' => "Diagnostic Center Basic Profile Successfully",
        'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }//end mehod










    public function CollectionProfile()
    {
        $data['header_title'] = "Collection Center Profile";

        $id = Auth::user()->id;
        $collectionData = User::find($id);

        return view('collection.collection_profile_view',compact('collectionData'), $data);
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

        if($request->file('photo')) {
        $file = $request->file('photo');
        @unlink(public_path('upload/collection_images/'.$data->photo));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/collection_images'),$filename);
        $data['photo'] = $filename;
        }
    
        $data->save();
    
        $notification = array(
        'message' => "Collection Center Basic Profile Successfully",
        'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }//end mehod



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
