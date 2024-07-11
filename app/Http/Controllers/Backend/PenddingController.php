<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PenddingController extends Controller
{
    public function HomeVisits()
    {
        $data['header_title'] = "Home Visits";

        return view('admin.home.home_visits' ,$data);
    }

    public function DoctorwiseReport()
    {
        $data['header_title'] = "Doctor wise Reports";

        return view('admin.reports.doctorwise_reports' ,$data);
    }

    public function HospitalwiseReport()
    {
        $data['header_title'] = "Hospitalwise Reports";

        return view('admin.reports.hospitalwise_reports' ,$data);
    }

    public function PathologywiseReport()
    {
        $data['header_title'] = "Pathologywise Reports";

        return view('admin.reports.pathologywise_reports' ,$data);
    }

    public function CollectionwiseReport()
    {
        $data['header_title'] = "Collectionwise Reports";

        return view('admin.reports.collectionwise_reports' ,$data);
    }
}
