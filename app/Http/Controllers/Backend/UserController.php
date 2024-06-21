<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function ChangePassword()
    {
        $data['header_title'] = "Change Password";
        return view('profile.change_password',$data);
    }


    public function UpdateChangePassword(Request $request)
    {
        $user = User::getSingle(Auth::user()->id);
        if(Hash::check($request->old_password, $user->password))
        {
            $user->password = Hash::make($request->new_password);
            $user->save();
           return redirect()->back()->with('success',"Password successfully update");
        }
        else
        {
            return redirect()->back()->with('error',"Old Password is not Currect");
        }
    }
}
