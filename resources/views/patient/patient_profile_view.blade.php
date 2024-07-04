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
                                <img src="{{ (!empty($patientData->photo)) ? url($patientData->photo): url('upload/no_image.jpg') }}" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                    {{-- <input id="profile-img-file-input" type="file" class="profile-img-file-input"> --}}
                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                        {{-- <span class="avatar-title rounded-circle bg-light text-body">
                                            <i class="ri-camera-fill"></i>
                                        </span> --}}
                                    </label>
                                </div>
                            </div>
                            <h5 class="fs-17 mb-1">{{ $patientData->name }}</h5>
                            <p class="text-muted mb-0"><strong>Patient Id :- </strong> {{ $patientData->reg_number }}</p>
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
                        </ul>
                    </div>
                    <div class="card-body p-4">
                        <div class="tab-content">
                            <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                
                                <form id="myForm" action="{{ route('patient.profile.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mb-3 form-groups">
                                                <label for="firstnameInput" class="form-label label-required">Name</label>
                                                <input type="text" name="name" class="form-control" id="firstnameInput" placeholder="Enter your name" value="{{ $patientData->name }}">
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3 form-groups">
                                                <label for="phonenumberInput" class="form-label label-required">Mobile Number </label>
                                                <input type="tel" name="phone" class="form-control" id="phonenumberInput" maxlength="10" placeholder="Enter your phone number" value="{{ $patientData->phone }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                                <span id="phone-error" class="invalid-feedback"></span>
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3 form-groups">
                                                <label for="emailInput" class="form-label label-required">Email</label>
                                                <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your email" value="{{ $patientData->email }}">
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3">
                                            <label for="gender" class="form-label label-required">Gender</label>
                                            <select class="js-example-basic-single mb-3 form-groups" name="gender" id="gender">
                                                <option selected="">Choose </option>
                                                <option value="1"{{ ($patientData->gender == 1) ? 'selected' : '' }}>Male</option>
                                                <option value="0"{{ ($patientData->gender == 0) ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3">
                                            <div class="mb-3 form-groups">
                                                <label for="JoiningdatInput" class="form-label label-required">Joining  Date</label>
                                                <input type="date" name="doj" class="form-control" data-provider="flatpickr" id="JoiningDate" value="{{ $patientData->doj }}">
                                                    {{-- <input type="date" class="form-control" data-provider="flatpickr" id="StartleaveDate">  --}}
                                            </div>
                                        </div>
                                        <!--end col-->

                                        <div class="col-lg-3">
                                            <div class="mb-3 form-groups">
                                                <label for="JoiningdatInput" class="form-label label-required">Date of Birthday</label>
                                                    <input type="date" name="dob" class="form-control" data-provider="flatpickr" id="StartleaveDate" value="{{ $patientData->dob }}"> 
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3 form-groups">
                                                <label for="aadharcard" class="form-label">Aadhar Card Number</label>
                                                <input type="text" name="aadharcard" class="form-control" id="aadharcard" minlength="12" maxlength="12" placeholder="0000 0000 0000" value="{{ $patientData->aadharnumber }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
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
                                                <img id="showImage" src="{{ (!empty($patientData->photo)) ? url('upload/patient_images/'.$patientData->photo) : url('upload/no_image.jpg') }}" alt="image" style="width:100px; height:100px;">
                                                
                                            </div>
                                        </div>
                                        <!--end col-->

                                        
                                        <div class="col-lg-12">
                                            <div class="mb-3 pb-2 form-groups">
                                                <label for="inputAddress3" class="form-label label-required">Address</label>
                                                <textarea class="form-control" name="address" id="inputAddress3" placeholder="Enter Address" rows="3">{{ $patientData->address }}</textarea>
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
                                            <select class="js-example-basic-single mb-3" name="country_id">
                                                <option>Select Country</option>
                                                {{-- @foreach ($countries as $item)
                                                        <option value="{{ $item->id }}" {{ $item->id == $patientData->diagnostic->country_id ? 'selected' : '' }}>{{ $item->country_name }}</option>
                                                    @endforeach --}}
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <label for="state" class="form-label">State</label>
                                            <select class="js-example-basic-single mb-3" name="state_id">
                                                <option>Select State</option>
                                                {{-- @foreach ($states as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $patientData->patient->state_id ? 'selected' : '' }}>{{ $item->state_name }}</option>
                                            @endforeach --}}
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <label for="city" class="form-label">City</label>
                                            <select class="js-example-basic-single mb-3" name="city_id">
                                                <option>Select City</option>
                                                {{-- @foreach ($cities as $item)
                                                <option value="{{ $item->id }}" {{ $item->id == $patientData->patient->city_id ? 'selected' : '' }}>{{ $item->city_name }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                        <!--end col-->
                                        <div class="col-lg-3">
                                            <div class="mb-3 form-groups">
                                                <label for="nameInput" class="form-label label-required">Location</label>
                                                <input type="text" class="form-control" name="locationname" id="nameInput" placeholder="Enter Location" value="">
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
                    url: "{{ url('/patientprofilestate/ajax') }}/"+country_id,
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
                    url: "{{ url('/patientprofilecity/ajax') }}/"+state_id,
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



<script type="text/javascript">
    $(document).ready(function (){
        $.validator.addMethod("uniquePhone", function (value, element) {
        var result = false;
        $.ajax({
            type: "POST",
            url: "{{ route('patientcheck.phone') }}", // Change this to the route that checks the phone number
            data: {
                phone: value,
                _token: $('input[name="_token"]').val() // CSRF token
            },
            async: false,
            success: function (response) {
                result = (response === 'true') ? false : true;
            }
        });
        return result;
    }, 'Mobile number already exists.');

        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },
                    phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                    uniquePhone: true // Add the uniquePhone method
                },
                email: {
                    required: true,
                    email: true,
                }, 
                aadharcard: {
                required: true,
                minlength: 12,
                maxlength: 12,
                digits: true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter Full Name',
                },
                phone: {
                    required: 'Please Enter Mobile Number',
                    digits: 'Please enter a valid 10-digit mobile number',
                    minlength: 'Mobile number must be exactly 10 digits',
                    maxlength: 'Mobile number must be exactly 10 digits',
                    uniquePhone: 'Mobile number already exists.',
                },
                email: {
                    required: 'Please Enter Email Id',
                    email: 'Please enter a valid email address',
                },
                aadharcard: {
                required: 'Please enter your Aadhar Card Number',
                minlength: 'Aadhar Card Number must be 12 digits',
                maxlength: 'Aadhar Card Number must be 12 digits',
                digits: 'Please enter a valid Aadhar Card Number',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-groups').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


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

@endsection