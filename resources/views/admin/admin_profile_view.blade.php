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
                                <img src="{{ (!empty($adminData->photo)) ? url($adminData->photo): url('upload/no_image.jpg') }}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                    {{-- <input id="profile-img-file-input" type="file" class="profile-img-file-input"> --}}
                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                        {{-- <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-camera-fill"></i>
                                        </span> --}}
                                    </label>
                                </div>
                            </div>
                            <h5 class="fs-17 mb-1">{{ $adminData->name }}</h5>
                            <p class="text-muted mb-0">Admin Id:- {{ $adminData->reg_number }}</p>
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
                                <h5 class="card-title mb-0">Portfolio</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <a href="javascript:void(0);" class="badge bg-light text-primary fs-12"><i class="ri-add-fill align-bottom me-1"></i> Add</a>
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                    <i class="ri-github-fill"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control" id="gitUsername" placeholder="Username" value="@daveadame">
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-primary">
                                    <i class="ri-global-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="websiteInput" placeholder="www.example.com" value="www.velzon.com">
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-success">
                                    <i class="ri-dribbble-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="dribbleName" placeholder="Username" value="@dave_adame">
                        </div>
                        <div class="d-flex">
                            <div class="avatar-xs d-block flex-shrink-0 me-3">
                                <span class="avatar-title rounded-circle fs-16 bg-danger">
                                    <i class="ri-pinterest-fill"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="pinterestName" placeholder="Username" value="Advance Dave">
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
                                    Personal Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#locationDetails" role="tab">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Location Details
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                    <i class="far fa-user"></i>
                                    Change Password
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#experience" role="tab">
                                    <i class="far fa-envelope"></i>
                                    Experience
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
                                
                                <form action="{{ route('admin.profile.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="pathnumberInput" class="form-label">Admin Id</label>
                                                <input type="text" name="path_number" class="form-control" id="pathnumberInput" placeholder="Enter your admin id" value="{{ $adminData->reg_number }}" disabled>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="usernameInput" class="form-label">User Name</label>
                                                <input type="text" name="username" class="form-control" id="usernameInput" placeholder="Enter your username" value="{{ $adminData->username }}" disabled>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="nameInput" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="nameInput" placeholder="Enter your name" value="{{ $adminData->name }}">
                                                @error('name')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror

                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="phonenumberInput" class="form-label">Mobile Number </label>
                                                <input type="text" name="phone" class="form-control" id="phonenumberInput" pattern="[0-9]{10}" maxlength="10" placeholder="Enter your phone number" value="{{ $adminData->phone }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="emailInput" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="emailInput" placeholder="Enter your email" value="{{ $adminData->email }}">
                                                @error('email')
                                                <p class="invalid-feedback">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="JoiningDate" class="form-label">Joining  Date</label>
                                                <input type="date" name="doj" class="form-control" data-provider="flatpickr" id="JoiningDate" value="{{ $adminData->doj }}">
                                                    {{-- <input type="date" class="form-control" data-provider="flatpickr" id="StartleaveDate">  --}}
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="dateofbirthdayInput" class="form-label">Date of Birthday</label>
                                                    <input type="date" name="dob" class="form-control" data-provider="flatpickr" id="dateofbirthdayInput" value="{{ $adminData->dob }}"> 
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="aadharcard" class="form-label">Aadhar Card Number</label>
                                                <input type="text" name="aadharcard" class="form-control" id="aadharcard" minlength="12" maxlength="12" placeholder="0000 0000 0000" value="{{ $adminData->aadharnumber }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                    
                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" name="photo" class="form-control" id="image">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3">
                                            <div class="mb-3">
                                                <label class="form-label"></label>
                                                <img id="showImage" src="{{ (!empty($adminData->photo)) ? url('upload/admin_images/profile/'.$adminData->photo) : url('upload/no_image.jpg') }}" alt="image" style="width:100px; height:100px;">
                                                
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-12">
                                            <div class="mb-3 pb-2">
                                                <label for="inputAddress3" class="form-label">Address</label>
                                                <textarea class="form-control" name="address" id="inputAddress3" placeholder="Enter Address" rows="3">{{ $adminData->address }}</textarea>
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
                                <form action="javascript:void(0);">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="country" class="form-label">Country</label>
                                            <select class="js-example-basic-single mb-3 form-groups" name="country">
                                                <option selected="">Select Country</option>
                                                <option value="1">India</option>
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <label for="state" class="form-label">State</label>
                                            <select class="js-example-basic-single mb-3 form-groups" name="state">
                                                <option selected="">Select State</option>
                                                <option value="1">Uttar Pradesh</option>
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <label for="city" class="form-label">City</label>
                                            <select class="js-example-basic-single mb-3 form-groups" name="city">
                                                <option selected="">Select City</option>
                                                <option value="1">Unnao</option>
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3 form-groups">
                                                <label for="locationInput" class="form-label">Location</label>
                                                <input type="text" class="form-control" name="location" id="locationInput" placeholder="Enter Location" value="{{ $adminData->name  }}">
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

@endsection


@push('scripts')

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