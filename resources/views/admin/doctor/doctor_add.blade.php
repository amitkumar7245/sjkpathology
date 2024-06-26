@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create Doctor</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Create Doctor</li>
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
                            <form id="myForm" action="{{ route('store.doctor') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Basic Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="nameInput" class="form-label">Name</label>
                                                    <input type="text" name="full_name" class="form-control" id="nameInput" placeholder="Enter your Name" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="phonenumberInput" class="form-label">Mobile Number</label>
                                                    <input type="tel" name="phone" class="form-control" id="phonenumberInput" pattern="[0-9]{10}" maxlength="10" placeholder="Enter 10-digit Mobile number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="emailInput" class="form-label">Email Id</label>
                                                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your Email Id" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="gender" id="gender">
                                                    <option>Select Gender </option>
                                                    <option value="1">Male</option>
                                                    <option value="0">Female</option>
                                                </select>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="JoiningDate" class="form-label">Joining  Date</label>
                                                    <input type="date" name="doj" class="form-control" data-provider="flatpickr" id="JoiningDate" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="dateofbirthdayInput" class="form-label">Date of Birthday</label>
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
                                                <div class="mb-3 form-groups">
                                                    <label for="passwordInput" class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Enter Password" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div>

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Department Details</h4>
                                    <div class="around10">
                                        <div class="row">

                                            <div class="col-lg-3 mb-3">
                                                <label for="strem_id" class="form-label">Strem</label>
                                                <select class="js-example-basic-single mb-3" name="strem_id">
                                                    <option>Select Strem</option>
                                                       @foreach ($strem as $item)
                                                            <option value="{{ $item->id }}">{{ $item->strem_name }}</option>
                                                       @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <label for="substrem_id" class="form-label">Strem</label>
                                                <select class="js-example-basic-single mb-3" name="substrem_id">
                                                    <option>Select Strem</option>
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="course_id" class="form-label">Course</label>
                                                <select class="js-example-basic-single mb-3" name="course_id">
                                                    <option>Select Course</option>
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="specialization_id" class="form-label">Specialization</label>
                                                <select class="js-example-basic-single mb-3" name="specialization_id">
                                                    <option>Select Specialization</option>
                                                </select>
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

                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div>
                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Bank Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="bankname" class="form-label">Bank Name</label>
                                                <select class="js-example-basic-single mb-3" name="bankname_id">
                                                    <option>Select Bank Name</option>
                                                        @foreach ($bankdetails as $item )
                                                            <option value="{{ $item->id }}">{{ $item->bankname }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="branchnameInput" class="form-label">Branch Name</label>
                                                    <input type="text" name="branchname" class="form-control" id="branchnameInput" placeholder="Enter Branch Name" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="ifsccodeInput" class="form-label">IFSC Code</label>
                                                    <input type="text" name="ifsccode" class="form-control" id="ifsccodeInput" placeholder="IFSC Code" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="accountnoInput" class="form-label">Account Number</label>
                                                    <input type="text" name="accountnumber" class="form-control" id="accountnoInput" placeholder="Account Number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="accountholderInput" class="form-label">Account Holder Name</label>
                                                    <input type="text" name="accountholdername" class="form-control" id="accountholderInput" placeholder="Account Holder Name" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="commissionInput" class="form-label">Commission</label>
                                                    <input type="text" name="commission" class="form-control" id="commissionInput" placeholder="50%" value="">
                                                </div>
                                            </div>
                                            <!--end col-->

                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div>
                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Clinic Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="clinicnameInput" class="form-label">Clinic Name</label>
                                                    <input type="text" name="clinicname" class="form-control" id="clinicnameInput" placeholder="Enter your Clinic Name" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="clinicownernameInput" class="form-label">Clinic Owner Name</label>
                                                    <input type="text" name="clinicownername" class="form-control" id="clinicownernameInput" placeholder="Enter your Clinic Owner Name" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="gstnumberInput" class="form-label">GST Number</label>
                                                    <input type="text" name="gstnumber" class="form-control" id="gstnumberInput" placeholder="Enter GST number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="clinicemailInput" class="form-label">Email ID</label>
                                                    <input type="email" name="clinicemail" class="form-control" id="clinicemailInput" placeholder="Enter your email" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="telephonenumberInput" class="form-label">Telephone Number</label>
                                                    <input type="text" name="telephonenumber" class="form-control" id="telephonenumberInput" placeholder="Enter your telephone number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="phonenumberInput" class="form-label">Mobile Number</label>
                                                    <input type="text" name="phonenumber" class="form-control" id="phonenumberInput" placeholder="Enter your phone number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="latitudeInput" class="form-label">Latitude</label>
                                                    <input type="text" name="latitude" class="form-control" id="latitudeInput" placeholder="Enter your Latitude" value="">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="longitudeInput" class="form-label">Longitude</label>
                                                    <input type="text" name="longitude" class="form-control" id="longitudeInput" placeholder="Enter your Longitude" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4 mb-3">
                                                <label for="state" class="form-label">State</label>
                                                <select class="js-example-basic-single mb-3" name="state_id">
                                                    <option>Select State</option>
                                                        @foreach ($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-4 mb-3">
                                                <label for="city" class="form-label">City</label>
                                                <select class="js-example-basic-single mb-3" name="city_id">
                                                    <option>Select City</option>
                                                </select>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="clinicaddressTextarea" class="form-label">Clinic Address</label>
                                                    <textarea class="form-control" name="clinicaddress" id="clinicaddressTextarea" rows="2"></textarea>
                                                </div>
                                            </div>

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
                                                    <label for="locationInput" class="form-label">Location</label>
                                                    <input type="text" name="location" class="form-control" id="locationInput" placeholder="Enter Location" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="addressinput" class="form-label">Address</label>
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
                                                    <label class="input-group-text" for="inputGroupFile01">Avatar</label>
                                                    <input type="file" class="form-control" id="inputGroupFile01">
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
                                                    <label class="input-group-text" for="inputGroupFile03">Sign</label>
                                                    <input type="file" class="form-control" id="inputGroupFile03">
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
                    url: "{{ url('/doctorstate/ajax') }}/"+country_id,
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
                    url: "{{ url('/doctorcity/ajax') }}/"+state_id,
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
    $(document).ready(function(){
        $('select[name="strem_id"]').on('change', function(){
            var strem_id = $(this).val();
            if (strem_id) {
                $.ajax({
                    url: "{{ url('/strem/ajax') }}/"+strem_id,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="substrem_id"]').html('');
                        var d =$('select[name="substrem_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="substrem_id"]').append('<option value="'+ value.id + '">' + value.substrem_name + '</option>');
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
        $('select[name="substrem_id"]').on('change', function(){
            var substrem_id = $(this).val();
            if (substrem_id) {
                $.ajax({
                    url: "{{ url('/substrem/ajax') }}/"+substrem_id,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="course_id"]').html('');
                        var d =$('select[name="course_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="course_id"]').append('<option value="'+ value.id + '">' + value.course_name + '</option>');
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
        $('select[name="course_id"]').on('change', function(){
            var course_id = $(this).val();
            if (course_id) {
                $.ajax({
                    url: "{{ url('/course/ajax') }}/"+course_id,
                    type: "GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="specialization_id"]').html('');
                        var d =$('select[name="specialization_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="specialization_id"]').append('<option value="'+ value.id + '">' + value.specialization_name + '</option>');
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                full_name: {
                    required : true,
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10,
                },
                email: {
                    required: true,
                    email: true,
                },
                gender: {
                    required : true,
                },
                doj: {
                    required : true,
                },
                dob: {
                    required : true,
                }, 
                aadharcard: {
                    required: true,
                    minlength: 12,
                    maxlength: 12,
                    digits: true,
               },
               password: {
                    required : true,
                }, 
            },
            messages :{
                full_name: {
                    required : 'Please Enter Name',
                },
                phone: {
                    required: 'Please Enter Mobile Number',
                    digits: 'Please enter a valid 10-digit mobile number',
                    minlength: 'Mobile number must be exactly 10 digits',
                    maxlength: 'Mobile number must be exactly 10 digits',
                },
                email: {
                    required: 'Please Enter Email Id',
                    email: 'Please enter a valid email address',
                },
                gender: {
                    required: 'Please select your Gender',
                },
                doj: {
                    required : 'Please Enter the Date of Joining',
                },
                dob: {
                    required : 'Please Enter the Date of Birthday',
                },
                aadharcard: {
                    required: 'Please enter your Aadhar Card Number',
                    minlength: 'Aadhar Card Number must be 12 digits',
                    maxlength: 'Aadhar Card Number must be 12 digits',
                    digits: 'Please enter a valid Aadhar Card Number',
               },
               password: {
                    required : 'Please Enter the Password',
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


@endsection
