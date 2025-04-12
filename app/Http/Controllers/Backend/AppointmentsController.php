<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointments;

class AppointmentsController extends Controller
{
    public function AppointmentsIndex()
    {
        $data['header_title'] = "Book Appointments List";

        $bookappointmentView = Appointments::latest()->get();
        return view('admin.appointment.appointments_list', compact('bookappointmentView'), $data);
    }

    public function BookAppointmentsPending($id)
    {
        Appointments::findOrFail($id)->update(['status' => 'pending']);

        $notification = array(
            'message' => 'Book Appointments Pending',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method
    
    public function BookAppointmentsDone($id)
    {
        Appointments::findOrFail($id)->update(['status' => 'done']);

        $notification = array(
            'message' => 'Book Appointments Done',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }//end method

}
