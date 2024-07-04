@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create Doctors</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Create Doctors</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        
        
        <div class="row g-3">
            
                <div class="col-lg-12">
                    <div class="card border-top border-0 border-4 border-primary">
                        <div class="card-body p-4">
                            <form id="myForm" action="{{ route('store.doctors') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Basic Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="nameInput" class="form-label label-required">Name</label>
                                                    <input type="text" name="full_name" class="form-control" id="nameInput" placeholder="Enter your Name" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="phonenumberInput" class="form-label label-required">Mobile Number</label>
                                                    <input type="tel" name="phone" class="form-control" id="phonenumberInput" maxlength="10" placeholder="Enter your phone number" value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                                    <span id="phone-error" class="invalid-feedback"></span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="emailInput" class="form-label label-required">Email Id</label>
                                                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your Email Id" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="gender" class="form-label label-required">Gender</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="gender" id="gender">
                                                    <option>Select Gender </option>
                                                    <option value="1">Male</option>
                                                    <option value="0">Female</option>
                                                </select>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="JoiningDate" class="form-label label-required">Joining  Date</label>
                                                    <input type="date" name="doj" class="form-control" data-provider="flatpickr" id="JoiningDate" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="dateofbirthdayInput" class="form-label label-required">Date of Birthday</label>
                                                        <input type="date" name="dob" class="form-control" data-provider="flatpickr" id="dateofbirthdayInput" value=""> 
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="aadharcard" class="form-label">Aadhar Card Number</label>
                                                    <input type="text" name="aadharcard" class="form-control" id="aadharcard" minlength="12" maxlength="12" placeholder="0000 0000 0000" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="regnumberInput" class="form-label">Reg. Number</label>
                                                    <input type="text" class="form-control" name="regnumber" id="regnumberInput" placeholder="Enter Reg. Number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="licensenumberInput" class="form-label">License Number</label>
                                                    <input type="text" class="form-control" name="licensenumber" id="licensenumberInput" placeholder="Enter License Number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="specializationumberInput" class="form-label label-required">Specialization</label>
                                                    <input type="text" class="form-control" name="specialization" id="specializationumberInput" placeholder="Enter Specialization Number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="commissionInput" class="form-label label-required">Commission</label>
                                                    <input type="text" name="commission" class="form-control" id="commissionInput" placeholder="50%" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="passwordInput" class="form-label label-required">Password</label>
                                                    <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Enter Password" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div>

                                
                                
                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Location Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label for="country" class="form-label">Country</label>
                                                <select class="js-example-basic-single mb-3" name="country_id">
                                                    <option>Select Country</option>
                                                        @foreach ($countries as $item )
                                                            <option value="{{ $item->id }}">{{ $item->country_name }}</option>
                                                        @endforeach
                                                    
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="state" class="form-label">State</label>
                                                <select class="js-example-basic-single mb-3" name="state_id">
                                                    <option>Select State</option>
                                                    
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="city" class="form-label">City</label>
                                                <select class="js-example-basic-single mb-3" name="city_id">
                                                    <option>Select City</option>
                                                    
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="locationInput" class="form-label label-required">Location</label>
                                                    <input type="text" name="location" class="form-control" id="locationInput" placeholder="Enter Location" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="addressinput" class="form-label label-required">Address</label>
                                                <textarea name="address" class="form-control" id="addressinput" placeholder="Enter Address" rows="3"></textarea>
                                            </div>
                                            <!--end col-->

                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div>
                                
                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Gallery Images</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">Avatar</label>
                                                    <input type="file" name="photo" class="form-control" id="image" accept=".jpg,.jpeg,.png">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile03">Aadhar Card</label>
                                                    <input type="file" class="form-control" id="inputGroupFile02">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-4 mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile05">Sign</label>
                                                    <input type="file" class="form-control" id="inputGroupFile05">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-soft-success">Cancel</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<script type="text/javascript">
    $(document).ready(function(){
        $('select[name="country_id"]').on('change', function(){
            var country_id = $(this).val();
            if (country_id) {
                $.ajax({
                    url: "{{ url('/doctorsstate/ajax') }}/"+country_id,
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
                    url: "{{ url('/doctorscity/ajax') }}/"+state_id,
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


<script type="text/javascript">
    $(document).ready(function () {
    $.validator.addMethod("uniquePhone", function (value, element) {
        var result = false;
        $.ajax({
            type: "POST",
            url: "{{ route('check.phone') }}", // Change this to the route that checks the phone number
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
            full_name: {
                required: true,
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
            gender: {
                required: true,
            },
            doj: {
                required: true,
            },
            dob: {
                required: true,
            },
            aadharcard: {
                required: true,
                minlength: 12,
                maxlength: 12,
                digits: true,
            },
            password: {
                required: true,
            },
            commission: {
                required: true,
            },
        },
        messages: {
            full_name: {
                required: 'Please Enter Name',
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
            gender: {
                required: 'Please select your Gender',
            },
            doj: {
                required: 'Please Enter the Date of Joining',
            },
            dob: {
                required: 'Please Enter the Date of Birthday',
            },
            aadharcard: {
                required: 'Please enter your Aadhar Card Number',
                minlength: 'Aadhar Card Number must be 12 digits',
                maxlength: 'Aadhar Card Number must be 12 digits',
                digits: 'Please enter a valid Aadhar Card Number',
            },
            password: {
                required: 'Please Enter the Password',
            },
            commission: {
                required: 'Please Enter the Commission',
            },
        },
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-groups').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        },
    });
});

    
</script>


@endsection
