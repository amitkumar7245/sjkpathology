<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bank;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use App\Models\EmployeeType;
use App\Models\Reportingtype;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Staff;
use App\Models\Diagnostic;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Helpers\TokenHelper;

class StaffController extends Controller
{
    public function StaffIndex()
    {
        $data['header_title'] = "Staff List";

        $stafflist = User::where('role', 'staff')->with('staff.creator')->latest()->get();
        return view('admin.staff.staff_list', compact('stafflist'), $data);
    }

    public function StaffAdd()
    {
        $data['header_title'] = "Staff Add";

        $emptype = EmployeeType::latest()->get();
        $bankdetails = Bank::latest()->get();
        $countries = Country::latest()->get();
        $states = State::latest()->get();
        $city = City::latest()->get();
        $departmenties = Department::latest()->get();
        $designation = Designation::latest()->get();
        $diagnostic = User::where('role', 'diagnostic')->latest()->get();
        $collectioncenter = User::where('role', 'collection')->latest()->get();
        return view('admin.staff.staff_add', compact('emptype', 'bankdetails', 'countries', 'states', 'city', 'departmenties', 'designation', 'diagnostic', 'collectioncenter'), $data);
    }

    public function StaffStore(Request $request)
    {
        // dd($request->all());

        $request->validate([

            'photo' => 'nullable|image|mimes:jpg,png|max:2048', // Validating image
        ]);

        if (!empty($request->photo)) {

            $staffProfile = $request->photo;
            $name_gen = date('YmdHi') . $staffProfile->getClientOriginalName();
            $staffProfile->move(public_path('upload/staff_images/'), $name_gen);
            $save_url = 'upload/staff_images/' . $name_gen;

            $manager = new ImageManager(new Driver());
            $img = $manager->read(public_path('upload/staff_images/' . $name_gen));

            $img->resize(100, 100);
            $img->save(public_path('upload/staff_images/' . $name_gen));
        }

        $token = TokenHelper::token();

        $staff_id = User::insertGetId([

            'reg_number' => 'S -' . $token,
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
            'role' => 'staff',
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

        Staff::insert([
            'staffuser_id' => $staff_id,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'locationname' => $request->location,
            'employeetype_id' => $request->employeetype_id,
            'department_id' => $request->department_id,
            'designation_id' => $request->designation_id,
            'bankname_id' => $request->bankname_id,
            'branchname' => $request->branchname,
            'ifsccode' => $request->ifsccode,
            'accountnumber' => $request->accountnumber,
            'accountholdername' => $request->accountholdername,
            'salary' => $request->salary,
            'commission' => $request->commission,
            'created_by' => Auth::user()->id,
            'status' => 'active',
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Staff registered successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.staff')->with($notification);
    } //end method


    public function StaffEdit($id)
    {
        $data['header_title'] = "Staff Edit";

        $emptype = EmployeeType::latest()->get();
        $banks = Bank::latest()->get();
        $countries = Country::latest()->get();
        $states = State::latest()->get();
        $city = City::latest()->get();
        $departmenties = Department::latest()->get();
        $designation = Designation::latest()->get();

        $staff_id = User::with('staff', 'staff.bank')->findOrFail($id);

        return view('admin.staff.staff_edit', compact('emptype', 'banks', 'countries', 'states', 'city', 'departmenties', 'designation', 'staff_id'), $data);
    }

    public function StaffUpdate(Request $request)
    {
        $staff_id = $request->id;

        $request->validate([
            'photo' => 'nullable|image|mimes:jpg,png|max:2048', // Validating image
            'email' => 'required|string|email|max:255|unique:users,email,' . $staff_id,
        ]);


        // Update user details
        $user = User::findOrFail($staff_id);

        if ($request->hasFile('photo')) {
            $staffsProfile = $request->file('photo');
            $name_gen = date('YmdHi') . $staffsProfile->getClientOriginalName();

            // Delete old image
            if ($user->photo && file_exists(public_path($user->photo))) {
                File::delete(public_path($user->photo));
            }

            // Save new image
            $staffsProfile->move(public_path('upload/staff_images/'), $name_gen);
            $user->photo = 'upload/staff_images/' . $name_gen;
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
            'photo' => $user->photo,  // Update the photo URL
            'status' => 'active',
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()
        ]);

        // Update staff details
        $staff = Staff::where('staffuser_id', $staff_id)->firstOrFail();
        $staff->update([
            'employeetype_id' => $request->employeetype_id,
            'department_id' => $request->department_id,
            'designation_id' => $request->designation_id,
            'bankname_id' => $request->bankname_id,
            'branchname' => $request->branchname,
            'ifsccode' => $request->ifsccode,
            'accountnumber' => $request->accountnumber,
            'accountholdername' => $request->accountholdername,
            'commission' => $request->commission,
            'salary' => $request->salary,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'locationname' => $request->location,
            'updated_by' => Auth::user()->id,
            'status' => 'active',
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Staff updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.staff')->with($notification);
    }

    public function StaffDestory($id)
    {
        User::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Staff Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.staff')->with($notification);
    }

    public function StaffPrint($id, Request $request)
    {
        $staffPrintIdcard = User::with('staff')->find($id);
        $filename = $request->input('filename', $staffPrintIdcard->name . '.pdf');

        if (substr($filename, -4) !== '.pdf') {
            $filename .= '.pdf';
        }

        $pdf = Pdf::loadView('admin.pdf.staffidcard', compact('staffPrintIdcard'))->setPaper('a4', 'landscape');
        // return $pdf->download('staffidcard.pdf');
        return $pdf->download($filename);
    } //end method

    public function IdCardProfile($id)
    {
        $data['header_title'] = "Staff Id Card View";

        $staffIdCard = User::with('staff')->findOrFail($id);
        return view('admin.staff.staff_profile_idcard', compact('staffIdCard'), $data);
    }


    public function StaffView($id)
    {
        $data['header_title'] = "Staff View";

        $staff_view = User::with('staff')->findOrFail($id);

        return view('admin.staff.staff_view', compact('staff_view'), $data);
    } // End Method


    public function StaffInactive($id)
    {
        $staff = Staff::where('staffuser_id', $id)->firstOrFail();
        $staff->update(['status' => 'inactive']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'inactive']);

        $notification = array(
            'message' => 'Staff Inactivated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function StaffActive($id)
    {
        $staff = Staff::where('staffuser_id', $id)->firstOrFail();
        $staff->update(['status' => 'active']);

        $user = User::findOrFail($id);
        $user->update(['status' => 'active']);

        $notification = array(
            'message' => 'Staff Activated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function GetStaffState($country_id)
    {
        $staties = State::where('country_id', $country_id)->orderBy('state_name', 'ASC')->get();
        return json_encode($staties);
    } // End Method


    public function GetStaffCity($state_id)
    {
        $cities = City::where('state_id', $state_id)->orderBy('city_name', 'ASC')->get();
        return json_encode($cities);
    } // End Method

}
