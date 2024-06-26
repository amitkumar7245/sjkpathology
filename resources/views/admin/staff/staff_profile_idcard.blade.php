@extends('layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/idcard.css') }}">
@endsection

@section('dashboard')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Staff Idcard View</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Staff Idcard View</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <div class="flex-grow-1">
                                    <a href="{{ route('print.staff', $staffIdCard->id) }}" class="btn btn-danger"><i
                                            class="fas fa-download"></i> Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Staff Idcard View</h5>
                        </div>

                        <div class="idcard">
                            <div class="idcardcard-header">
                                <img src="{{ asset('upload/sjk_logo/logo-header.png') }}" alt="pathology-logo"
                                    style="height:58px;">
                            </div>
                            <div class="idcardcard-content" id="ICARD">
                                <img src="{{ asset('upload/staff_images/' . $staffIdCard->photo) }}" alt="staff-image"
                                    width="55px" height="90px">
                                <table>
                                    <tr>
                                        <td><strong>Name:</strong></td>
                                        <td>{{ $staffIdCard->name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Employee ID:</strong></td>
                                        <td>{{ $staffIdCard->reg_number }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Department:</strong></td>
                                        <td>{{ $staffIdCard->staff->department->department_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Position:</strong></td>
                                        <td>{{ $staffIdCard->staff->designation->designation_name }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Mobile No.:</strong></td>
                                        <td>{{ $staffIdCard->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Issued Date:</strong></td>
                                        <td>{{ $staffIdCard->doj }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="idcardcard-footer">
                                <img src="{{ asset('upload/sjk_logo/qr.jpg') }}" alt="Barcode Footer"
                                    style="width: 120px; height: 40px; float: left; border: 1px solid #57b3e9;">
                                <img src="{{ asset('upload/sjk_logo/sign.png') }}" alt="sign"
                                    style="float: right; width: 120px; height: 40px;">
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection
