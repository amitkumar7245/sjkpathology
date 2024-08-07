@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Collection Centres</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Edit Collection Centres</li>
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
                            <form id="myForm" action="{{ route('update.collectioncenter') }}" method="post" enctype="multipart/form-data">

                              @csrf
                               <input type="hidden" name="id" value="{{ $usercollectionCenters->id }}">

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Basic Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="nameInput" class="form-label">Name</label>
                                                    <input type="text" name="name" class="form-control" id="nameInput" placeholder="Enter your Name" value="{{ $usercollectionCenters->name }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                        
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="phonenumberInput" class="form-label">Mobile Number</label>
                                                    <input type="tel" name="phone" class="form-control" id="phonenumberInput" maxlength="10" placeholder="Enter 10-digit Mobile number" value="{{ $usercollectionCenters->phone }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">

                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="emailInput" class="form-label">Email Id</label>
                                                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="Enter your Email Id" value="{{ $usercollectionCenters->email }}">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="JoiningDate" class="form-label">Joining  Date</label>
                                                    <input type="date" name="doj" class="form-control" data-provider="flatpickr" id="JoiningDate" value="{{ $usercollectionCenters->doj }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="aadharcardInput" class="form-label">Aadhar Card Number</label>
                                                    <input type="text" name="aadharcard" class="form-control" id="aadharcardInput" minlength="12" maxlength="12" placeholder="0000 0000 0000" value="{{ $usercollectionCenters->aadharnumber }}">
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
                                                <select class="js-example-basic-single mb-3 form-groups" name="country_id">
                                                    <option>Select Country</option>
                                                        @foreach ($countries as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == optional($usercollectionCenters->collection)->country_id ? 'selected' : '' }}>{{ $item->country_name }}</option>
                                                        @endforeach
                                                    
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="state" class="form-label">State</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="state_id">
                                                    <option>Select State</option>
                                                        @foreach ($states as $state)
                                                            <option value="{{ $state->id }}" {{ $state->id == optional($usercollectionCenters->collection)->state_id ? 'selected' : '' }}>{{ $state->state_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <label for="city" class="form-label">City</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="city_id">
                                                    <option>Select City</option>
                                                        @foreach ($cities as $city)
                                                            <option value="{{ $city->id }}" {{ $city->id == optional($usercollectionCenters->collection)->city_id ? 'selected' : '' }}>{{ $city->city_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="locationInput" class="form-label">Location</label>
                                                    <input type="text" class="form-control" name="location_name" id="locationInput" placeholder="Enter Location" value="{{ optional($usercollectionCenters->collection)->locationname }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <label for="inputAddress3" class="form-label">Address</label>
                                                <textarea class="form-control" name="address" id="inputAddress3" placeholder="Enter Address" rows="3">{{ $usercollectionCenters->address }}</textarea>
                                            </div>
                                            <!--end col-->

                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div>
                                {{-- <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Social Media</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label for="fbInput" class="form-label">Facebook Url</label>
                                                    <input type="text" class="form-control" name="fb" id="fbInput" placeholder="Facebook Url" value="">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                        </div>
                                        <!--end row-->
                                        
                                    </div>
                                </div> --}}
                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Gallery Images</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text">Image</label>
                                                    <input type="file" name="collectionimage" class="form-control"
                                                    id="image" accept=".jpg,.png,.jpeg">
                                                </div>
                                            </div>
                                             <!--end col-->
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group mb-3">
    
                                                    @if (!empty($usercollectionCenters->photo))
                                                       <img id="showImage" src="{{ asset($usercollectionCenters->photo) }}" style="width: 200px" height="200px">
                                                    @endif
                                                       
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-md-6 mb-3">
                                                <div class="input-group mb-3">
                                                    <label class="input-group-text" for="inputGroupFile01">Aadhar Card</label>
                                                    <input type="file" name="aadhar_image" class="form-control" id="inputGroupFile01">
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
                    url: "{{ url('/collectioncenterstate/ajax') }}/"+country_id,
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
                    url: "{{ url('/collectioncentercity/ajax') }}/"+state_id,
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
    $(document).ready(function (){
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
                },
                email: {
                    required: true,
                    email: true,
                },
                doj: {
                    required : true,
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
                doj: {
                    required : 'Please Enter the Date of Joining',
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


@endsection