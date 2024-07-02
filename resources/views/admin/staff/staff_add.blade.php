@extends('layout.app')

@section('dashboard')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Create Staff</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Create Staff</li>
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
                            <form id="myForm" action="{{ route('store.staff') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Basic Details</h4>
                                    <div class="around10">
                                        <div class="row">

                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="nameInput" class="form-label">Name</label>
                                                    <input type="text" name="full_name" class="form-control"
                                                        id="nameInput" placeholder="Enter your Name" value="">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="phonenumberInput" class="form-label">Mobile Number</label>
                                                    <input type="tel" name="phone" class="form-control"
                                                        id="phonenumberInput" pattern="[0-9]{10}" maxlength="10"
                                                        placeholder="Enter 10-digit Mobile number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="emailInput" class="form-label">Email Id</label>
                                                    <input type="email" name="email" class="form-control"
                                                        id="emailInput" placeholder="Enter your Email Id" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="gender"
                                                    id="gender">
                                                    <option>Select your Gender </option>
                                                    <option value="1">Male</option>
                                                    <option value="0">Female</option>
                                                </select>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="JoiningDate" class="form-label">Joining Date</label>
                                                    <input type="date" name="doj" class="form-control"
                                                        data-provider="flatpickr" id="JoiningDate" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="dateofbirthdayInput" class="form-label">Date of
                                                        Birthday</label>
                                                    <input type="date" name="dob" class="form-control"
                                                        data-provider="flatpickr" id="dateofbirthdayInput" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="aadharcard" class="form-label">Aadhar Card Number</label>
                                                    <input type="text" name="aadharcard" class="form-control"
                                                        id="aadharcard" minlength="12" maxlength="12"
                                                        placeholder="0000 0000 0000" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="EmployeeType" class="form-label">Employee Type</label>
                                                <select class="js-example-basic-single mb-3 form-groups"
                                                    name="employeetype_id">
                                                    <option>Select Employee Type </option>
                                                    @foreach ($emptype as $item)
                                                        <option value="{{ $item->id }}">{{ $item->employee_type_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="gender" class="form-label">Department Name</label>
                                                <select class="js-example-basic-single mb-3 form-groups"
                                                    name="department_id">
                                                    <option>Select Department Name </option>
                                                    @foreach ($departmenties as $item)
                                                        <option value="{{ $item->id }}">{{ $item->department_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="gender" class="form-label">Designation Name</label>
                                                <select class="js-example-basic-single mb-3 form-groups"
                                                    name="designation_id">
                                                    <option>Select Designation Name </option>
                                                    @foreach ($designation as $item)
                                                        <option value="{{ $item->id }}">{{ $item->designation_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="passwordInput" class="form-label">Password</label>
                                                    <input type="password" name="password" class="form-control"
                                                        id="passwordInput" placeholder="Enter Password" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->

                                    </div>
                                </div>

                                {{-- <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Team</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label for="reporting" class="form-label">Reporting</label>
                                                <select class="js-example-basic-single mb-3" name="reporting">
                                                    <option>Select Reporting</option>
                                                    <option value="1">SM</option>
                                                    <option value="2">DSM</option>
                                                    <option value="3">ASM</option>
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="teamname" class="form-label">Team Name</label>
                                                <select class="js-example-basic-single mb-3" name="teamname">
                                                    <option>Select Team Name</option>
                                                    <option value="1">Amit Kumar</option>
                                                    <option value="2">Rohit Kumar</option>
                                                    <option value="3">Anuj Kumar</option>
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="diagnosticcenter" class="form-label">Lab Name</label>
                                                <select class="js-example-basic-single mb-3" name="diagnosticcenter_id">
                                                    <option>Select Lab Name</option>
                                                    @foreach ($diagnostic as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="collectioncenter" class="form-label">Collection Center</label>
                                                <select class="js-example-basic-single mb-3" name="collectioncenter">
                                                    <option>Select Collection Center</option>
                                                    @foreach ($collectioncenter as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->

                                        </div>
                                        <!--end row-->

                                    </div>
                                </div> --}}
                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Bank Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <label for="bankname" class="form-label">Bank Name</label>
                                                <select class="js-example-basic-single mb-3" name="bankname_id">
                                                    <option>Select Bank Name</option>
                                                    @foreach ($bankdetails as $item)
                                                        <option value="{{ $item->id }}">{{ $item->bankname }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->

                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="branchnameInput" class="form-label">Branch Name</label>
                                                    <input type="text" name="branchname" class="form-control"
                                                        id="branchnameInput" placeholder="Enter Branch Name"
                                                        value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="ifsccodeInput" class="form-label">IFSC Code</label>
                                                    <input type="text" name="ifsccode" class="form-control"
                                                        id="ifsccodeInput" placeholder="IFSC Code" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="accountnoInput" class="form-label">Account Number</label>
                                                    <input type="text" name="accountnumber" class="form-control"
                                                        id="accountnoInput" placeholder="Account Number" value="">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="accountholderInput" class="form-label">Account Holder
                                                        Name</label>
                                                    <input type="text" name="accountholdername" class="form-control"
                                                        id="accountholderInput" placeholder="Account Holder Name"
                                                        value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="salaryInput" class="form-label">Salary</label>
                                                    <input type="text" name="salary" class="form-control"
                                                        id="salaryInput" placeholder="10,000/" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="commissionInput" class="form-label">Commission</label>
                                                    <input type="text" name="commission" class="form-control"
                                                        id="commissionInput" placeholder="50%" value="">
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
                                                    @foreach ($countries as $item)
                                                        <option value="{{ $item->id }}">{{ $item->country_name }}
                                                        </option>
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
                                                    <input type="text" name="location" class="form-control"
                                                        id="locationInput" placeholder="Enter Location" value="">
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

                                            <div class="col-md-6 mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile01">Photo</label>
                                                    <input type="file" name="photo" class="form-control"
                                                        id="image" accept=".jpg,.png,.jpeg">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-md-6 mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile02">Aadhar
                                                        Card</label>
                                                    <input type="file" name="aadharphoto" class="form-control"
                                                        id="inputGroupFile02">
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
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="country_id"]').on('change', function() {
                var country_id = $(this).val();
                if (country_id) {
                    $.ajax({
                        url: "{{ url('/staffstate/ajax') }}/" + country_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="state_id"]').html('');
                            var d = $('select[name="state_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="state_id"]').append('<option value="' +
                                    value.id + '">' + value.state_name + '</option>'
                                );
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
        $(document).ready(function() {
            $('select[name="state_id"]').on('change', function() {
                var state_id = $(this).val();
                if (state_id) {
                    $.ajax({
                        url: "{{ url('/staffcity/ajax') }}/" + state_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="city_id"]').html('');
                            var d = $('select[name="city_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="city_id"]').append('<option value="' +
                                    value.id + '">' + value.city_name + '</option>');
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
        $(document).ready(function() {
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
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-groups').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
@endsection
