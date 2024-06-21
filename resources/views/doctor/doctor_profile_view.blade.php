@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg profile-setting-img">
                <img src="{{ asset('backend/assets/images/profile-bg.jpg') }}" class="profile-wid-img" alt="">
                <div class="overlay-content">
                    <div class="text-end p-3">
                        <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                            <input id="profile-foreground-img-file-input" type="file" class="profile-foreground-img-file-input">
                            <label for="profile-foreground-img-file-input" class="profile-photo-edit btn btn-light">
                                <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col-xxl-3">
                <div class="card mt-n5">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                <img src="{{ (!empty($doctorData->photo)) ? url('upload/doctor_images/'.$doctorData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                    {{-- <input id="profile-img-file-input" type="file" class="profile-img-file-input"> --}}
                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                        {{-- <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-camera-fill"></i>
                                        </span> --}}
                                    </label>
                                </div>
                            </div>
                            <h5 class="fs-17 mb-1">{{ $doctorData->name }}</h5>
                            <p class="text-muted mb-0">Doctor Id:- {{ $doctorData->reg_number }}</p>
                        </div>
                    </div>
                </div>
                <!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-5">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-0">Complete Your Profile</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="javascript:void(0);" class="badge bg-light text-primary fs-12"><i class="ri-edit-box-line align-bottom me-1"></i> Edit</a>
                            </div>
                        </div>
                        <div class="progress animated-progress custom-progress progress-label">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <div class="label">30%</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-0">Social Media</h5>
                                <hr>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="javascript:void(0);" class="badge bg-light text-primary fs-12"><i class="ri-add-fill align-bottom me-1"></i> Add</a>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                    <i class="ri-facebook-circle-fill"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" id="facebookUsername" placeholder="Facebook Username" value="">
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-primary">
                                    <i class="ri-instagram-line"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="instagramUsername" placeholder="Instagram Username" value="">
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-success">
                                    <i class="ri-twitter-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="twitterUsername" placeholder="Twitter Username" value="">
                        </div>
                        <div class="d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-danger">
                                    <i class="ri-pinterest-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="pinterestName" placeholder="Pinterest Username" value="">
                        </div>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-xxl-9">
                <div class="card mt-xxl-n5">
                    <div class="card-header">
                        <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                    <i class="fas fa-home"></i>
                                    Basic Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#locationDetails" role="tab">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Location Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#bankDetails" role="tab">
                                    <i class="ri-bank-line"></i>
                                    Bank Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#clinicdetails" role="tab">
                                    <i class="fas fa-home"></i>
                                    Clinic Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#specialization" role="tab">
                                    <i class="fas fa-home"></i>
                                    Services and Specialization
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#education" role="tab">
                                    <i class="fas fa-home"></i>
                                    Education
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#experience" role="tab">
                                    <i class="fas fa-home"></i>
                                    Experience
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#registrations" role="tab">
                                    <i class="fas fa-home"></i>
                                    Registrations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                    <i class="far fa-user"></i>
                                    Change Password
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#privacy" role="tab">
                                    <i class="far fa-envelope"></i>
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                <form action="{{ route('doctor.profile.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="firstnameInput" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="firstnameInput" placeholder="Enter your name" value="{{ $doctorData->name }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                       
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">Mobile Number</label>
                                                <input type="tel" name="phone" class="form-control" id="phonenumberInput" pattern="[0-9]{10}" maxlength="10" placeholder="Enter your mobile number" value="{{ $doctorData->phone }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="emailInput" class="form-label">Email
                                                    Address</label>
                                                <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your email" value="{{ $doctorData->email }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <label for="bankname" class="form-label">Gender</label>
                                            <select class="js-example-basic-single mb-3" name="gender">
                                                <option>Choose Gender</option>
                                                <option value="1"{{ ($doctorData->gender == 1) ? 'selected' : '' }}>Male</option>
                                                <option value="0"{{ ($doctorData->gender == 0) ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="JoiningdatInput" class="form-label">Joining  Date</label>
                                                <input type="date" name="doj" class="form-control" data-provider="flatpickr" id="JoiningDate" value="{{ $doctorData->doj }}">
                                                    {{-- <input type="date" class="form-control" data-provider="flatpickr" id="StartleaveDate">  --}}
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="JoiningdatInput" class="form-label">Date of Birthday</label>
                                                    <input type="date" name="dob" class="form-control" data-provider="flatpickr" id="StartleaveDate" value="{{ $doctorData->dob }}"> 
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="aadharcard" class="form-label">Aadhar Card Number</label>
                                                <input type="tel" name="aadharcard" class="form-control" id="aadharcard" minlength="12" maxlength="12" placeholder="0000 0000 0000" value="{{ $doctorData->aadharnumber }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="firstnameInput" class="form-label">Image</label>
                                                <input type="file" name="photo" class="form-control" id="image">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label"></label>
                                                <img id="showImage" src="{{ (!empty($doctorData->photo)) ? url('upload/doctor_images/'.$doctorData->photo) : url('upload/no_image.jpg') }}" alt="image" style="width:100px; height:100px;">
                                                
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-12">
                                            <div class="mb-3 pb-2">
                                                <label for="inputAddress3" class="form-label">Address</label>
                                                <textarea class="form-control" name="address" id="inputAddress3" placeholder="Enter Address" rows="3">{{ $doctorData->address }}</textarea>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-soft-success">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="locationDetails" role="tabpanel">
                                <form action="{{ route('doctor.location.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="country" class="form-label">Country</label>
                                            <select class="js-example-basic-single mb-3" name="country_id">
                                                <option>Select Country</option>
                                                    @foreach ($countries as $item)
                                                    <option value="{{ $item->id }}"{{ $item->id == $doctorData->doctor->country_id ? 'selected' : '' }}>{{ $item->country_name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <label for="state" class="form-label">State</label>
                                            <select class="js-example-basic-single mb-3" name="state_id">
                                                <option>Select State</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->id }}" {{ $state->id == $doctorData->doctor->state_id ? 'selected' : '' }}>{{ $state->state_name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <label for="city" class="form-label">City</label>
                                            <select class="js-example-basic-single mb-3" name="city_id">
                                                <option>Select City</option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}" {{ $city->id == $doctorData->doctor->city_id ? 'selected' : '' }}>{{ $city->city_name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="nameInput" class="form-label">Location</label>
                                                <input type="text" class="form-control" name="location" id="nameInput" placeholder="Enter Location" value="{{ $doctorData->doctor->locationname }}">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary">Updates</button>
                                                <button type="button" class="btn btn-soft-success">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->

                            <div class="tab-pane" id="bankDetails" role="tabpanel">
                                <form action="{{ route('doctor.bank.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <label for="bank" class="form-label">Bank Name</label>
                                            <select class="js-example-basic-single mb-3" name="bankname">
                                                <option value="">Choose Bank</option>
                                                    @foreach ($banks as $bank)
                                                        <option value="{{ $bank->id }}" {{ $doctorData->doctor->bankname_id == $bank->id ? 'selected' : '' }}>{{ $bank->bankname }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="branchnameInput" class="form-label">Branch Name</label>
                                                <input type="text" class="form-control" name="branchname" id="branchnameInput" placeholder="Enter Branch Name" value="{{ $doctorData->doctor->branchname }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="ifsccodeInput" class="form-label">IFSC Code</label>
                                                <input type="text" class="form-control" name="ifsccode" id="ifsccodeInput" placeholder="Enter IFSC Code" value="{{ $doctorData->doctor->ifsccode }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="accountnumberInput" class="form-label">Account Number</label>
                                                <input type="text" class="form-control" name="accountnumber" id="accountnumberInput" placeholder="Enter Account Number" value="{{ $doctorData->doctor->accountnumber }}">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="accountholdernameInput" class="form-label">Account Holder Name</label>
                                                <input type="text" class="form-control" name="accountholdername" id="accountholdernameInput" placeholder="Enter Account Holder Name" value="{{ $doctorData->doctor->accountholdername }}">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="commissionInput" class="form-label">Commission</label>
                                                <input type="text" name="commission" class="form-control" id="commissionInput" placeholder="50%" value="{{ $doctorData->doctor->commission }}">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-soft-success">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->

                            <div class="tab-pane" id="clinicdetails" role="tabpanel">
                                <form action="{{ route('doctor.clinic.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="clinic_id" value="{{ $doctorData->clinics->first()->id }}">
                                    <input type="hidden" name="clinicuser_id" value="{{ $doctorData->id }}">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="clinicnameInput" class="form-label">Clinic Name</label>
                                                <input type="text" name="clinicname" class="form-control" id="clinicnameInput" placeholder="Enter your Clinic Name" value="{{ $doctorData->clinics->first()->clinic_name }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="clinicownernameInput" class="form-label">Clinic Owner Name</label>
                                                <input type="text" name="clinicownername" class="form-control" id="clinicownernameInput" placeholder="Enter your Clinic Owner Name" value="{{ $doctorData->clinics->first()->clinicowner_name ?? '' }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="gstnumberInput" class="form-label">GST Number</label>
                                                <input type="text" name="gstnumber" class="form-control" id="gstnumberInput" placeholder="Enter GST number" value="{{ $doctorData->clinics->first()->gst_number ?? '' }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="clinicemailInput" class="form-label">Email ID</label>
                                                <input type="email" name="clinic_email" class="form-control" id="clinicemailInput" placeholder="Enter your email" value="{{ $doctorData->clinics->first()->clinic_email ?? '' }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="telephonenumberInput" class="form-label">Telephone Number</label>
                                                <input type="text" name="telephonenumber" class="form-control" id="telephonenumberInput" placeholder="Enter your telephone number" value="{{ $doctorData->clinics->first()->telephonephone_number ?? '' }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">Mobile Number</label>
                                                <input type="text" name="phonenumber" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="{{ $doctorData->clinics->first()->phone_number ?? '' }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 mb-3">
                                            <label for="state" class="form-label">State</label>
                                            <select class="js-example-basic-single mb-3" name="state_id">
                                                <option>Select State</option>
                                                    @foreach ($states as $state)
                                                        <option value="{{ $state->id }}" {{ $state->id == $doctorData->doctor->state_id ? 'selected' : '' }}>{{ $state->state_name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6 mb-3">
                                            <label for="city" class="form-label">City</label>
                                            <select class="js-example-basic-single mb-3" name="city_id">
                                                <option>Select City</option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city->id }}" {{ $city->id == $doctorData->doctor->city_id ? 'selected' : '' }}>{{ $city->city_name }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="latitudeInput" class="form-label">Latitude</label>
                                                <input type="text" name="latitude" class="form-control" id="latitudeInput" placeholder="Enter your Latitude" value="{{ $doctorData->clinics->first()->latitude ?? '' }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="longitudeInput" class="form-label">Longitude</label>
                                                <input type="text" name="longitude" class="form-control" id="longitudeInput" placeholder="Enter your Longitude" value="{{ $doctorData->clinics->first()->longitude ?? '' }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                      
                                        <div class="col-lg-12">
                                            <div>
                                                <label for="clinicaddressTextarea" class="form-label">Clinic Address</label>
                                                <textarea class="form-control" name="clinicaddress" id="clinicaddressTextarea" rows="2">{{ $doctorData->clinics->first()->clinic_address ?? '' }}</textarea>
                                            </div>
                                        </div>
                                        <!--end col-->

                                     <div class="col-lg-12">
                                            <div class="row">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title mb-0" data-sider-select-id="6ed2581a-9b26-4625-be1f-afca6280c056">Clinic File Upload</h4>
                                                    </div><!-- end card header -->
            
                                                    <div class="card-body">
                                                        <p class="text-muted">FilePond is a JavaScript library that
                                                            optimizes multiple images for faster uploads and offers a great, accessible, silky
                                                            smooth user experience.</p>
                                                        <div class="filepond--root filepond filepond-input-multiple filepond--hopper" data-style-button-remove-item-position="left" data-style-button-process-item-position="right" data-style-load-indicator-position="right" data-style-progress-indicator-position="right" data-style-button-remove-item-align="false" style="height: 76px;"><input class="filepond--browser" type="file" id="filepond--browser-wagzw6vos" name="filepond" aria-controls="filepond--assistant-wagzw6vos" aria-labelledby="filepond--drop-label-wagzw6vos" multiple="">
                                                            <a class="filepond--credits" aria-hidden="true" href="https://pqina.nl/" target="_blank" rel="noopener noreferrer" style="transform: translateY(68px);">Powered by PQINA</a>
                                                            <div class="filepond--drop-label" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                                                <label for="filepond--browser-wagzw6vos" id="filepond--drop-label-wagzw6vos" aria-hidden="true">Drag &amp; Drop your files or <span class="filepond--label-action" tabindex="0">Browse</span></label></div><div class="filepond--list-scroller" style="transform: translate3d(0px, 60px, 0px);"><ul class="filepond--list" role="list"></ul></div><div class="filepond--panel filepond--panel-root" data-scalable="true"><div class="filepond--panel-top filepond--panel-root"></div><div class="filepond--panel-center filepond--panel-root" style="transform: translate3d(0px, 8px, 0px) scale3d(1, 0.6, 1);"></div><div class="filepond--panel-bottom filepond--panel-root" style="transform: translate3d(0px, 68px, 0px);"></div></div><span class="filepond--assistant" id="filepond--assistant-wagzw6vos" role="status" aria-live="polite" aria-relevant="additions"></span><div class="filepond--drip"></div><fieldset class="filepond--data"></fieldset></div>
                                                    </div>
                                                    <!-- end card body -->
                                                </div>
                                            </div>
                                        </div> 
                                        
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-soft-success">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="specialization" role="tabpanel">
                                <form action="javascript:void(0);">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="longitudeInput" class="form-label">Services</label>
                                                <select class="js-example-disabled-multi" name="states[]" multiple="multiple">
                                                    <optgroup label="UK">
                                                        <option value="London">London</option>
                                                        <option value="Manchester" selected>Manchester</option>
                                                        <option value="Liverpool">Liverpool</option>
                                                    </optgroup>
                                                    <optgroup label="FR">
                                                        <option value="Paris">Paris</option>
                                                        <option value="Lyon">Lyon</option>
                                                        <option value="Marseille">Marseille</option>
                                                    </optgroup>
                                                    <optgroup label="SP">
                                                        <option value="Madrid" selected>Madrid</option>
                                                        <option value="Barcelona">Barcelona</option>
                                                        <option value="Malaga">Malaga</option>
                                                    </optgroup>
                                                    <optgroup label="CA">
                                                        <option value="Montreal">Montreal</option>
                                                        <option value="Toronto">Toronto</option>
                                                        <option value="Vancouver">Vancouver</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="longitudeInput" class="form-label">Specialization</label>
                                                <select class="js-example-disabled-multi" name="states[]" multiple="multiple">
                                                    <optgroup label="UK">
                                                        <option value="London">London</option>
                                                        <option value="Manchester" selected>Manchester</option>
                                                        <option value="Liverpool">Liverpool</option>
                                                    </optgroup>
                                                    <optgroup label="FR">
                                                        <option value="Paris">Paris</option>
                                                        <option value="Lyon">Lyon</option>
                                                        <option value="Marseille">Marseille</option>
                                                    </optgroup>
                                                    <optgroup label="SP">
                                                        <option value="Madrid" selected>Madrid</option>
                                                        <option value="Barcelona">Barcelona</option>
                                                        <option value="Malaga">Malaga</option>
                                                    </optgroup>
                                                    <optgroup label="CA">
                                                        <option value="Montreal">Montreal</option>
                                                        <option value="Toronto">Toronto</option>
                                                        <option value="Vancouver">Vancouver</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        
                                        
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <button type="button" class="btn btn-soft-success">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="education" role="tabpanel">
                                <form action="javascript:void(0);">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="firstnameInput" class="form-label">Degree</label>
                                                <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your Degree" value="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="lastnameInput" class="form-label">College/Institute</label>
                                                <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your College/Institute" value="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">Year of Completion</label>
                                                <input type="text" class="form-control" id="phonenumberInput" placeholder="Enter your Year of Completion" value="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-soft-success">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="experience" role="tabpanel">
                                <form action="javascript:void(0);">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="firstnameInput" class="form-label">Hospital Name</label>
                                                <input type="text" class="form-control" id="firstnameInput" placeholder="Enter your Hospital Name" value="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="lastnameInput" class="form-label">Designation</label>
                                                <input type="text" class="form-control" id="lastnameInput" placeholder="Enter your Designation" value="">
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-soft-success">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="registrations" role="tabpanel">
                                <form action="javascript:void(0);">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="registrationsInput" class="form-label">Registrations</label>
                                                <input type="text" class="form-control" id="registrationsInput" placeholder="Enter your Registrations" value="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="yearInput" class="form-label">Year</label>
                                                <input type="text" class="form-control" id="yearInput" placeholder="Enter your Year" value="">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        
                                        <div class="col-lg-12">
                                            <div class="hstack gap-2 justify-content-end">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                                <button type="button" class="btn btn-soft-success">Cancel</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="changePassword" role="tabpanel">
                                <form action="javascript:void(0);">
                                    <div class="row g-2">
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="oldpasswordInput" class="form-label">Old
                                                    Password*</label>
                                                <input type="password" class="form-control" id="oldpasswordInput" placeholder="Enter current password">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="newpasswordInput" class="form-label">New
                                                    Password*</label>
                                                <input type="password" class="form-control" id="newpasswordInput" placeholder="Enter new password">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-4">
                                            <div>
                                                <label for="confirmpasswordInput" class="form-label">Confirm
                                                    Password*</label>
                                                <input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirm password">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <a href="javascript:void(0);" class="link-primary text-decoration-underline">Forgot
                                                    Password ?</a>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-success">Change
                                                    Password</button>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <div class="mt-4 mb-3 border-bottom pb-2">
                                    <div class="float-end">
                                        <a href="javascript:void(0);" class="link-primary">All Logout</a>
                                    </div>
                                    <h5 class="card-title">Login History</h5>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                            <i class="ri-smartphone-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6>iPhone 12 Pro</h6>
                                        <p class="text-muted mb-0">Los Angeles, United States - March 16 at
                                            2:47PM</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);">Logout</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                            <i class="ri-tablet-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6>Apple iPad Pro</h6>
                                        <p class="text-muted mb-0">Washington, United States - November 06
                                            at 10:43AM</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);">Logout</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                            <i class="ri-smartphone-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6>Galaxy S21 Ultra 5G</h6>
                                        <p class="text-muted mb-0">Conneticut, United States - June 12 at
                                            3:24PM</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);">Logout</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar-sm">
                                        <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                            <i class="ri-macbook-line"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6>Dell Inspiron 14</h6>
                                        <p class="text-muted mb-0">Phoenix, United States - July 26 at
                                            8:10AM</p>
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);">Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="experience" role="tabpanel">
                                <form>
                                    <div id="newlink">
                                        <div id="1">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="jobTitle" class="form-label">Job
                                                            Title</label>
                                                        <input type="text" class="form-control" id="jobTitle" placeholder="Job title" value="Lead Designer / Developer">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="companyName" class="form-label">Company
                                                            Name</label>
                                                        <input type="text" class="form-control" id="companyName" placeholder="Company name" value="Themesbrand">
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="experienceYear" class="form-label">Experience Years</label>
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <select class="form-control" data-choices data-choices-search-false name="experienceYear" id="experienceYear">
                                                                    <option value="">Select years</option>
                                                                    <option value="Choice 1">2001</option>
                                                                    <option value="Choice 2">2002</option>
                                                                    <option value="Choice 3">2003</option>
                                                                    <option value="Choice 4">2004</option>
                                                                    <option value="Choice 5">2005</option>
                                                                    <option value="Choice 6">2006</option>
                                                                    <option value="Choice 7">2007</option>
                                                                    <option value="Choice 8">2008</option>
                                                                    <option value="Choice 9">2009</option>
                                                                    <option value="Choice 10">2010</option>
                                                                    <option value="Choice 11">2011</option>
                                                                    <option value="Choice 12">2012</option>
                                                                    <option value="Choice 13">2013</option>
                                                                    <option value="Choice 14">2014</option>
                                                                    <option value="Choice 15">2015</option>
                                                                    <option value="Choice 16">2016</option>
                                                                    <option value="Choice 17" selected>2017
                                                                    </option>
                                                                    <option value="Choice 18">2018</option>
                                                                    <option value="Choice 19">2019</option>
                                                                    <option value="Choice 20">2020</option>
                                                                    <option value="Choice 21">2021</option>
                                                                    <option value="Choice 22">2022</option>
                                                                </select>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-auto align-self-center">
                                                                to
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-lg-5">
                                                                <select class="form-control" data-choices data-choices-search-false name="choices-single-default2">
                                                                    <option value="">Select years</option>
                                                                    <option value="Choice 1">2001</option>
                                                                    <option value="Choice 2">2002</option>
                                                                    <option value="Choice 3">2003</option>
                                                                    <option value="Choice 4">2004</option>
                                                                    <option value="Choice 5">2005</option>
                                                                    <option value="Choice 6">2006</option>
                                                                    <option value="Choice 7">2007</option>
                                                                    <option value="Choice 8">2008</option>
                                                                    <option value="Choice 9">2009</option>
                                                                    <option value="Choice 10">2010</option>
                                                                    <option value="Choice 11">2011</option>
                                                                    <option value="Choice 12">2012</option>
                                                                    <option value="Choice 13">2013</option>
                                                                    <option value="Choice 14">2014</option>
                                                                    <option value="Choice 15">2015</option>
                                                                    <option value="Choice 16">2016</option>
                                                                    <option value="Choice 17">2017</option>
                                                                    <option value="Choice 18">2018</option>
                                                                    <option value="Choice 19">2019</option>
                                                                    <option value="Choice 20" selected>2020
                                                                    </option>
                                                                    <option value="Choice 21">2021</option>
                                                                    <option value="Choice 22">2022</option>
                                                                </select>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <label for="jobDescription" class="form-label">Job
                                                            Description</label>
                                                        <textarea class="form-control" id="jobDescription" rows="3" placeholder="Enter description">You always want to make sure that your fonts work well together and try to limit the number of fonts you use to three or less. Experiment and play around with the fonts that you already have in the software you're working with reputable font websites. </textarea>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a class="btn btn-success" href="javascript:deleteEl(1)">Delete</a>
                                                </div>
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                    <div id="newForm" style="display: none;">

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="hstack gap-2">
                                            <button type="submit" class="btn btn-success">Update</button>
                                            <a href="javascript:new_link()" class="btn btn-primary">Add
                                                New</a>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </form>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="privacy" role="tabpanel">
                                <div class="mb-4 pb-2">
                                    <h5 class="card-title text-decoration-underline mb-3">Security:</h5>
                                    <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-15 mb-1">Two-factor Authentication</h6>
                                            <p class="text-muted">Two-factor authentication is an enhanced
                                                security meansur. Once enabled, you'll be required to give
                                                two types of identification when you log into Google
                                                Authentication and SMS are Supported.</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-sm-3">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">Enable Two-facor
                                                Authentication</a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-15 mb-1">Secondary Verification</h6>
                                            <p class="text-muted">The first factor is a password and the
                                                second commonly includes a text with a code sent to your
                                                smartphone, or biometrics using your fingerprint, face, or
                                                retina.</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-sm-3">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">Set
                                                up secondary method</a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column flex-sm-row mb-4 mb-sm-0 mt-2">
                                        <div class="flex-grow-1">
                                            <h6 class="fs-15 mb-1">Backup Codes</h6>
                                            <p class="text-muted mb-sm-0">A backup code is automatically
                                                generated for you when you turn on two-factor authentication
                                                through your iOS or Android Twitter app. You can also
                                                generate a backup code on twitter.com.</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-sm-3">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary">Generate backup codes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h5 class="card-title text-decoration-underline mb-3">Application
                                        Notifications:</h5>
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex">
                                            <div class="flex-grow-1">
                                                <label for="directMessage" class="form-check-label fs-15">Direct messages</label>
                                                <p class="text-muted">Messages from people you follow</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="directMessage" checked />
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mt-2">
                                            <div class="flex-grow-1">
                                                <label class="form-check-label fs-15" for="desktopNotification">
                                                    Show desktop notifications
                                                </label>
                                                <p class="text-muted">Choose the option you want as your
                                                    default setting. Block a site: Next to "Not allowed to
                                                    send notifications," click Add.</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="desktopNotification" checked />
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mt-2">
                                            <div class="flex-grow-1">
                                                <label class="form-check-label fs-15" for="emailNotification">
                                                    Show email notifications
                                                </label>
                                                <p class="text-muted"> Under Settings, choose Notifications.
                                                    Under Select an account, choose the account to enable
                                                    notifications for. </p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="emailNotification" />
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mt-2">
                                            <div class="flex-grow-1">
                                                <label class="form-check-label fs-15" for="chatNotification">
                                                    Show chat notifications
                                                </label>
                                                <p class="text-muted">To prevent duplicate mobile
                                                    notifications from the Gmail and Chat apps, in settings,
                                                    turn off Chat notifications.</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="chatNotification" />
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex mt-2">
                                            <div class="flex-grow-1">
                                                <label class="form-check-label fs-15" for="purchaesNotification">
                                                    Show purchase notifications
                                                </label>
                                                <p class="text-muted">Get real-time purchase alerts to
                                                    protect yourself from fraudulent charges.</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" role="switch" id="purchaesNotification" />
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h5 class="card-title text-decoration-underline mb-3">Delete This
                                        Account:</h5>
                                    <p class="text-muted">Go to the Data & Privacy section of your profile
                                        Account. Scroll to "Your data & privacy options." Delete your
                                        Profile Account. Follow the instructions to delete your account :
                                    </p>
                                    <div>
                                        <input type="password" class="form-control" id="passwordInput" placeholder="Enter your password" value="make@321654987" style="max-width: 265px;">
                                    </div>
                                    <div class="hstack gap-2 mt-3">
                                        <a href="javascript:void(0);" class="btn btn-soft-danger">Close &
                                            Delete This Account</a>
                                        <a href="javascript:void(0);" class="btn btn-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                            <!--end tab-pane-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div>
    <!-- container-fluid -->
</div><!-- End Page-content -->







<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $('select[name="country_id"]').on('change', function(){
            var country_id = $(this).val();
            if (country_id) {
                $.ajax({
                    url: "{{ url('/doctorprofilestate/ajax') }}/"+country_id,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="state_id"]').html('');
                        var d =$('select[name="state_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="state_id"]').append('<option value="'+ value.id + '">' + value.state_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>


<script type="text/javascript">
    $(document).ready(function(){
        $('select[name="state_id"]').on('change', function(){
            var state_id = $(this).val();
            if (state_id) {
                $.ajax({
                    url: "{{ url('/doctorprofilecity/ajax') }}/"+state_id,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="city_id"]').html('');
                        var d =$('select[name="city_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="city_id"]').append('<option value="'+ value.id + '">' + value.city_name + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>

@endsection


@push('scripts')

   {{-- <!--jquery cdn-->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <!--select2 cdn-->
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

   <script src="{{ asset('backend/assets/js/pages/select2.init.js') }}"></script>   --}}

  


       <!-- dropzone min -->
       <script src="{{ asset('backend/assets/libs/dropzone/dropzone-min.js') }}"></script>    
       <!-- filepond js -->
       <script src="{{ asset('backend/assets/libs/filepond/filepond.min.js') }}"></script>
       <script src="{{ asset('backend/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
       <script src="{{ asset('backend/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
       <script src="{{ asset('backend/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
       <script src="{{ asset('backend/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        document.getElementById('JoiningDate').value = today;
    });
</script>



@endpush