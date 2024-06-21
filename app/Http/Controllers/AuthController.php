<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function Login()
   {
    //   dd(Hash::make(123456));
    if(!empty(Auth::check()))
    {
        if(Auth::user()->role == "admin")
        {
            return redirect('admin/dashboard');
        }
        else if(Auth::user()->role == "doctor")
        {
            return redirect('doctor/dashboard');
        }
        else if(Auth::user()->role == "staff")
        {
            return redirect('staff/dashboard');
        }
       else if(Auth::user()->role == "patient")
        {
            return redirect('patient/dashboard');
        }
        else if(Auth::user()->role == "diagnostic")
        {
            return redirect('diagnostic/dashboard');
        }
        else if(Auth::user()->role == "collection")
        {
            return redirect('collection/dashboard');
        }
    }
      return view('auth.login');

   }//end method


    public function AuthLogin(Request $request)
   {
    // dd($request->all());
    $remember = !empty($request->remember) ? true : false;

    if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
    {
        if(Auth::user()->role == "admin")
        {
            return redirect('admin/dashboard');
        }
        else if(Auth::user()->role == "doctor")
        {
            return redirect('doctor/dashboard');
        }
        else if(Auth::user()->role == "staff")
        {
            return redirect('staff/dashboard');
        }
       else if(Auth::user()->role == "patient")
        {
            return redirect('patient/dashboard');
        }
        else if(Auth::user()->role == "diagnostic")
        {
            return redirect('diagnostic/dashboard');
        }
        else if(Auth::user()->role == "collection")
        {
            return redirect('collection/dashboard');
        }
    }
    else
    {
        return redirect()->back()->with('error', 'Please enter the currect email and password');
    }
      
   }//end Method

    public function AuthForgot()
    {
     return view('auth.forgot');
    }
 
    public function StoreForgot(Request $request)
    {
       //dd($request->all());
       $user = User::getEmailSingle($request->email);
       if(!empty($user))
         {
             $user->remember_token = Str::random(30);
             $user->save();
             Mail::to($user->email)->send(new ForgotPasswordMail($user));
 
             return redirect()->back()->with('success','Please check your email and reset your password');
         }
         else
         {
             return redirect()->back()->with('error','Email Not Found in the database');
         }
    }

    public function Reset($remember_token)
   {
      $user = User::getTokenSingle($remember_token);
      if(!empty($user))
      {
          $data['user'] = $user;
          return view('auth.reset',$data);
      }
      else
      {
       abort(404);
      }
   }

   public function PostReset($token, Request $request)
   {
      if($request->password == $request->cpassword)
      {
         $user = User::getTokenSingle($token);
         $user->password = Hash::make($request->password);
         $user->remember_token = Str::random(50);
         $user->save();

         return redirect('/')->with('success', 'Password Successfully Reset');
      }
      else
      {
          return redirect('')->with('error','Password and confirm password does not match');
      }
   }
    

   public function AuthLogout()
   {
      Auth::logout();
      return redirect(url(''));
   }

}
