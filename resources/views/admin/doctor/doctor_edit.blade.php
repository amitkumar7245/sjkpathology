@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Doctor</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Edit Doctor</li>
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
                            <form id="myForm" action="{{ route('update.doctor') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $doctor_id->id }}">

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Basic Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="nameInput" class="form-label label-required">Name</label>
                                                    <input type="text" name="full_name" class="form-control" id="nameInput" placeholder="Enter your Name" value="{{ $doctor_id->name ?? '' }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="phonenumberInput" class="form-label label-required">Mobile Number</label>
                                                    <input type="tel" name="phone" class="form-control" id="phonenumberInput" maxlength="10" placeholder="Enter your phone number" value="{{ $doctor_id->phone ?? '' }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="emailInput" class="form-label label-required">Email Id</label>
                                                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your Email Id" value="{{ $doctor_id->email ?? '' }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            

                                            <div class="col-lg-3">
                                                <label for="gender" class="form-label label-required">Gender</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="gender" id="gender">
                                                    <option value="">Select Gender</option>
                                                    <option value="1"{{ ($doctor_id->gender == 1) ? ' selected' : '' }}>Male</option>
                                                    <option value="0"{{ ($doctor_id->gender == 0) ? ' selected' : '' }}>Female</option>
                                                </select>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="JoiningDate" class="form-label label-required">Joining  Date</label>
                                                    <input type="date" name="doj" class="form-control" data-provider="flatpickr" id="JoiningDate" value="{{ $doctor_id->doj ?? '' }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="dateofbirthdayInput" class="form-label label-required">Date of Birthday</label>
                                                        <input type="date" name="dob" class="form-control" data-provider="flatpickr" id="dateofbirthdayInput" value="{{ $doctor_id->dob ?? '' }}"> 
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="specializationumberInput" class="form-label">Degree</label>
                                                    <input type="text" class="form-control" name="specialization" id="specializationumberInput" placeholder="Enter Degree" value="{{ $doctor_id->doctor->specialization ?? '' }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div>

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2"> Pathology Center Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="diagnostic_id" class="form-label label-required">Pathology Center Name</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="diagnostic_id">
                                                    <option>Select Pathology Center</option>
                                                        @foreach ($diagnostic as $item )
                                                            <option value="{{ $item->id }}" {{ $item->id == ($doctor_id->doctor->diagnostic_id ?? '') ? 'selected' : ''}}>{{ $item->name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-6">
                                                <label for="zonename" class="form-label label-required">Zone Name</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="zonename_id">
                                                    <option>Select Zone</option>
                                                        @foreach ($zone as $item )
                                                            <option value="{{ $item->id }}" {{ $item->id == ($doctor_id->doctor->zonename_id ?? '') ? 'selected' : '' }}>{{ $item->zone_name }}</option>
                                                        @endforeach 
                                                </select>
                                            </div>
                                            <!--end col-->



                                        </div>
                                        <!--end row-->

                                    </div>
                                </div>

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Percentage Test</h4>
                                    <div class="around10">
                                        <div class="row">
                                            
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="specialtestInput" class="form-label">Percentage (ST)</label>
                                                    <input type="text" class="form-control" name="specialtest" id="specialtestInput" placeholder="Enter Percentage" value="{{ $doctor_id->doctor->specialtest }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="routetestInput" class="form-label">Percentage Test (RT)</label>
                                                    <input type="text" class="form-control" name="routetest" id="routetestInput" placeholder="Enter Percentage" value="{{ $doctor_id->doctor->routetest }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="diagnosspecialtestInput" class="form-label">Percentage Diagnos (ST)</label>
                                                    <input type="text" class="form-control" name="diagnosspecialtest" id="diagnosspecialtestInput" placeholder="Enter Percentage" value="{{ $doctor_id->doctor->diagnosspecialtest }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="diagnosroutetestInput" class="form-label">Percentage Diagnos (RT)</label>
                                                    <input type="text" class="form-control" name="diagnosroutetest" id="diagnosroutetestInput" placeholder="Enter Percentage" value="{{ $doctor_id->doctor->diagnosroutetest }}">
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
                                            
                                            <div class="col-lg-4">
                                                <label for="state" class="form-label label-required">State</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="state_id">
                                                    <option>Select State</option>
                                                        @foreach ($states as $item )
                                                            <option value="{{ $item->id }}" {{ $item->id == ($doctor_id->doctor->state_id ?? '') ? 'selected' : '' }}>{{ $item->state_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label for="city" class="form-label label-required">City</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="city_id">
                                                    <option>Select City</option>
                                                        @foreach ($city as $item )
                                                            <option value="{{ $item->id }}" {{ $item->id == ($doctor_id->doctor->city_id ?? '') ? 'selected' : '' }}>{{ $item->city_name }}</option>
                                                        @endforeach
                                                    
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3 form-groups">
                                                    <label for="locationInput" class="form-label label-required">Location</label>
                                                    <input type="text" name="location" class="form-control" id="locationInput" placeholder="Enter Location" value="{{ $doctor_id->doctor->locationname ?? ''}}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="addressinput" class="form-label label-required">Address</label>
                                                <textarea name="address" class="form-control" id="addressinput" placeholder="Enter Address" rows="3">{{ $doctor_id->address ?? ''}}</textarea>
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
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile01">Photo</label>
                                                    <input type="file" name="photo" class="form-control" id="image" accept=".jpg,.png,.jpeg">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label"></label>
                                                    <img id="showImage" src="{{ (!empty($doctor_id->photo)) ? url($doctor_id->photo):url('upload/no_image.jpg') }}" style="width:100px; height:100px;">      
                                                </div>
                                            </div>
                                            <!--end col-->

                                            

                                            <div class="col-md-6 mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile03">Sign</label>
                                                    <input type="file" class="form-control" id="inputGroupFile03">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label"></label>
                                                    <img id="showImage" src="{{ (!empty($doctor_id->doctor_sign)) ? url($doctor_id->photo):url('upload/no_image.jpg') }}" style="width:100px; height:100px;">      
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="submit" class="btn btn-primary">Update</button>
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
