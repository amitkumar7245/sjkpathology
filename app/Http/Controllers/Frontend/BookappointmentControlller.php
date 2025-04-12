<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Appointments;
use App\Http\Controllers\Controller;


class BookappointmentControlller extends Controller
{
 
    public function StoreBookappointment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|digits:10',
        ]);

        Appointments::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'We have got your query, our customer support team will call you shortly. Thank you for your interest in SJK Lab.');
    }
}
