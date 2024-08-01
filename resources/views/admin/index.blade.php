@extends('layout.app')

@section('dashboard')

@php
    $totalStaff = App\Models\User::where('status','active')->where('role','staff')->get();
    $totalDoctor = App\Models\User::where('status','active')->where('role','doctor')->get();
    $totalPatient = App\Models\User::where('status','active')->where('role','patient')->get();
    $totalHospital = App\Models\User::where('status','active')->where('role','hospital')->get();
    $totalDiagnostic = App\Models\User::where('status','active')->where('role','diagnostic')->get();
    $totalCollection = App\Models\User::where('status','active')->where('role','collection')->get();
@endphp

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1">Welcome, {{ Auth::user()->name }}!</h4>
                                    <p class="text-muted mb-0">Here's what's happening with your Pathology today.</p>
                                </div>
                                <div class="mt-3 mt-lg-0">
                                    <form action="javascript:void(0);">
                                        <div class="row g-3 mb-0 align-items-center">
                                            <div class="col-sm-auto">
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-0 fs-13 dash-filter-picker shadow flatpickr-input active" data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y" data-deafult-date="01 Jan 2022 to 31 Jan 2022" readonly="readonly">
                                                    <div class="input-group-text bg-secondary border-secondary text-white">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xl-2 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-gradient-deepblue">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-white text-truncate mb-0">
                                                Total Staff</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="{{ count($totalStaff) }}">{{ count($totalStaff) }}</span></h4>
                                            <a href="{{ route('all.staff') }}" class="fw-semibold ff-secondary text-white">List Staff</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title rounded fs-3">
                                                 <i class="fas fa-users text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-2 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-gradient-orange">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-white text-truncate mb-0">
                                                Total Doctors</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="{{ count($totalDoctor) }}">{{ count($totalDoctor) }}</span></h4>
                                            <a href="{{ route('all.doctor') }}" class="fw-semibold ff-secondary text-white">List Doctors</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title rounded fs-3">
                                                <i class="fas fa-user-md text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-2 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-gradient-ohhappiness">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-white text-truncate mb-0">
                                               Total Patients</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="{{ count($totalPatient) }}">{{ count($totalPatient) }}</span></h4>
                                            <a href="#" class="fw-semibold ff-secondary text-white">List Patients</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title rounded fs-3">
                                                <i class="fas fa-user-injured text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-2 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-gradient-red">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-white text-truncate mb-0">
                                               Total Hospital</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="{{ count($totalHospital) }}">{{ count($totalHospital) }}</span></h4>
                                            <a href="{{ route('all.hospital') }}" class="fw-semibold ff-secondary text-white">List Hospital</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title rounded fs-3">
                                                <i class="fas fa-hospital text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-2 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-gradient-coral">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-white text-truncate mb-0">
                                               Total Pathology</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="{{ count($totalDiagnostic) }}">{{ count($totalDiagnostic) }}</span></h4>
                                            <a href="{{ route('all.diagnosticcenter') }}" class="fw-semibold ff-secondary text-white">List Pathology</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title rounded fs-3">
                                                <i class="fas fa-diagnoses text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-2 col-md-6">
                            <!-- card -->
                            <div class="card card-animate bg-gradient-ibiza">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-white text-truncate mb-0">
                                                Total Collection Center</p>
                                        </div>
                                        
                                    </div>
                                    <div class="d-flex align-items-end justify-content-between mt-1">
                                        <div>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-white"><span class="counter-value" data-target="{{ count($totalCollection) }}">{{ count($totalCollection) }}</span></h4>
                                            <a href="{{ route('all.collectioncenter') }}" class="fw-semibold ff-secondary text-white">Collection Cent.</a>
                                        </div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title rounded fs-3">
                                                <i class="bx bx-wallet text-white"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div> <!-- end row-->

                    

                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-primary)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Todays Collection(INR)</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0">₹<span class="counter-value" data-target="36894">0</span></h4>
                                        </div>
                                        
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-primary)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">This Month's Collection(INR)</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0">₹<span class="counter-value" data-target="28410">0</span></h4>
                                        </div>
                                        
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-primary)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">This Year's Collection(INR)</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0">₹<span class="counter-value" data-target="4305">0</span></h4>
                                        </div>
                                        
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-primary)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Todays Expense (INR)</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0">₹<span class="counter-value" data-target="5021">0</span></h4>
                                        </div>
                                        
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-xl-4 col-md-6">
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-primary)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> This Month's Expense(INR)</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0">₹<span class="counter-value" data-target="3948">0</span></h4>
                                        </div>
                                        
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                        <div class="col-xl-4 col-md-6">
                            <!-- card -->
                            <div class="card card-animate overflow-hidden">
                                <div class="position-absolute start-0" style="z-index: 0;">
                                    <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                        <style>
                                            .s0 {
                                                opacity: .05;
                                                fill: var(--vz-primary)
                                            }
                                        </style>
                                        <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z" />
                                    </svg>
                                </div>
                                <div class="card-body" style="z-index:1 ;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">This Year's Expense(INR)</p>
                                            <h4 class="fs-22 fw-semibold ff-secondary mb-0">₹<span class="counter-value" data-target="1340">0</span></h4>
                                        </div>
                                        
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">New Tests</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="28.05">0</span>k</h2>
                                            
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                                    <i data-feather="users" class="text-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">Complete Tests</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="97.66">0</span>k</h2>
                                            
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                                    <i data-feather="activity" class="text-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">New Home Visits</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="97.66">0</span>k</h2>
                                            
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                                    <i data-feather="activity" class="text-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <div class="card card-animate">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="fw-medium text-muted mb-0">Complete Home Visits</p>
                                            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="33.48">0</span>%</h2>
                                            
                                        </div>
                                        <div>
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-info-subtle rounded-circle fs-2">
                                                    <i data-feather="external-link" class="text-info"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card body -->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div> <!-- end row-->

                   
                    

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0 align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Revenue</h4>
                                    <div>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                            ALL
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                            1M
                                        </button>
                                        <button type="button" class="btn btn-soft-secondary btn-sm">
                                            6M
                                        </button>
                                        <button type="button" class="btn btn-soft-primary btn-sm">
                                            1Y
                                        </button>
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-header p-0 border-0 bg-light-subtle">
                                    <div class="row g-0 text-center">
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1">₹<span class="counter-value" data-target="7585"> 0</span></h5>
                                                <p class="text-muted mb-0">Commission</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1">₹<span class="counter-value" data-target="1000"> 0</span>k</h5>
                                                <p class="text-muted mb-0">Income</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0">
                                                <h5 class="mb-1">₹<span class="counter-value" data-target="367">0</span></h5>
                                                <p class="text-muted mb-0">Due Income</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-6 col-sm-3">
                                            <div class="p-3 border border-dashed border-start-0 border-end-0">
                                                <h5 class="mb-1 text-success"><span class="counter-value" data-target="18.92">0</span>%</h5>
                                                <p class="text-muted mb-0">Conversation Ratio</p>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                </div><!-- end card header -->

                                <div class="card-body p-0 pb-2">
                                    <div class="w-100">
                                        <div id="customer_impression_charts" data-colors='["--vz-warning", "--vz-primary", "--vz-success"]' class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        
                    </div>

                    

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Patients Appointment List</h5>
                                </div>
                                <div class="card-body">
                                    <table id="buttons-datatables" class="table table-bordered table-hover dt-responsive nowrap align-middle mdl-data-table dataTable no-footer" style="width:100%">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 10px;">
                                                    <div class="form-check">
                                                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                                    </div>
                                                </th>
                                                <th>SR No.</th>
                                                <th>Reg. No.</th>
                                                <th>Name</th>
                                                <th>Mobile No.</th>
                                                <th>Email</th>
                                                <th>Created By</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($stafflist as $key => $item )
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                                        </div>
                                                    </th>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $item->reg_number}}</td>
                                                    <td> 
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0"> 
                                                                @if ($item->photo != '')
                                                                    <img src="{{ asset($item->photo) }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                @else
                                                                    @if ($item->gender == '1') <!-- Assuming '1' for Male -->
                                                                        <img src="{{ asset('backend/assets/images/users/male-dummy.png') }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                    @elseif ($item->gender == '0') <!-- Assuming '0' for Female -->
                                                                        <img src="{{ asset('backend/assets/images/users/female-dummy.png') }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                    @else
                                                                        <img src="{{ asset('backend/assets/images/users/user-dummy-img.jpg') }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                    @endif
                                                                @endif
                                                                
                                                            </div>
                                                            <div class="flex-grow-1 ms-2 name">{{ $item->name }}</div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->staff && $item->staff->creator ? $item->staff->creator->name : $item->name }}</td>
                                                    @if ($item->status == 'active')
                                                    <td class="status"><span class="badge bg-success-subtle text-success text-uppercase">Active</span></td>
                                                    @else
                                                    <td class="status"><span class="badge bg-danger-subtle text-danger text-uppercase">Deactive</span></td> 
                                                    @endif 
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown dropdown-toggle show" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                                                <i class="ri-settings-3-line"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="{{ route('print.staff', $item->id) }}" class="dropdown-item"><i class="ri-printer-fill align-bottom me-2 text-muted"></i>Print</a></li>
                                                                <li><a href="{{ route('view.staff', $item->id) }}" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a href="{{ route('edit.staff', $item->id) }}" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="{{ route('delete.staff', $item->id) }}" id="delete" class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @if ($item->staff && $item->staff->status == 'active')
                                                            <a href="{{ route('inactive.staff', $item->id) }}" class="btn btn-primary btn-sm" title="Inactive"> <i class="fa-solid fa-thumbs-up"></i></a>
                                                        @else
                                                            <a href="{{ route('active.staff', $item->id) }}" class="btn btn-danger btn-sm" title="Active"> <i class="fa-solid fa-thumbs-down"></i></a>
                                                        @endif
            
                                                        <a href="{{ route('idcardprofile.staff', $item->id) }}" class="btn btn-primary btn-sm" title="Prnit"><i class="fas fa-print"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end row-->

                </div> <!-- end .h-100-->

            </div> <!-- end col -->

            
        </div>

    </div>
    <!-- container-fluid -->
</div>


@endsection