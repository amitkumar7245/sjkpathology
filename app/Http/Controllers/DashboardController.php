<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Dashboard ()
    {
        $data['header_title'] = 'Dashboard';

        if(Auth::user()->role == "admin")
        {
            return view('admin.index', $data);
        }
        else if(Auth::user()->role == "doctor")
        {
            return view('doctor.index', $data);
        }
        else if(Auth::user()->role == "staff")
        {
            return view('staff.index', $data);
        }
       else if(Auth::user()->role == "patient")
        {
            return view('patient.index', $data);
        }
        else if(Auth::user()->role == "diagnostic")
        {
            return view('diagnostic.index', $data);
        }
        else if(Auth::user()->role == "collection")
        {
            return view('collection.index', $data);
        }

    }//end Method
}
