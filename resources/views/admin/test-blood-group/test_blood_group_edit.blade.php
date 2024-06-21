@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Test Blood Group</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Edit Test Blood Group</li>
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
                            <form id="myForm" action="{{ route('update.testbloodgroup') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $testbloodgroup_id->id }}">
                                
                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Test Blood Group Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="testblood" class="form-label">Test Blood</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="testblood_id">
                                                    <option>Select Test Blood </option>
                                                        @foreach ($testBlood as $item )
                                                            <option value="{{ $item->id }}" {{ $item->id == $testbloodgroup_id->testblood_id ? 'selected' : ''}}>{{ $item->testblood_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3 form-groups">
                                                    <label for="testbloodgroupnameInput" class="form-label">Test Blood Group Name</label>
                                                    <input type="text" name="testbloodgroup_name" class="form-control" id="testbloodgroupnameInput" placeholder="Enter your Test Blood Group Name" value="{{ $testbloodgroup_id->testbloodgroup_name }}">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-4">
                                                <div class="mb-3 form-groups">
                                                    <label for="testbloodgroupnameInput" class="form-label">Short Cut</label>
                                                    <input type="text" name="testbloodgroup_code" class="form-control" id="testbloodgroupnameInput" placeholder="Enter your Short Cut Name" value="{{ $testbloodgroup_id->testbloodgroup_code }}">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-4">
                                                <label for="testblood" class="form-label">Sample Type</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="sampletype_id">
                                                    <option>Select Sample Type </option>
                                                        @foreach ($testsampletype as $item )
                                                            <option value="{{ $item->id }}" {{ $item->id == $testbloodgroup_id->sampletype_id ? 'selected' : ''}}>{{ $item->sampletype_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label for="testbloodgrouppriceInput" class="form-label">Price</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="testbloodgroup_price" class="form-control" id="testbloodgrouppriceInput" placeholder="Enter price" aria-label="Price" aria-describedby="basic-addon2" value="{{ $testbloodgroup_id->testbloodgroup_price }}">
                                                    <span class="input-group-text" id="basic-addon2">INR</span>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            

                                            <div class="col-lg-12">
                                                <label for="precautioninput" class="form-label">Precaution</label>
                                                <textarea name="testbloodgroup_precautions" class="form-control" id="precautioninput" placeholder="Enter Precaution" rows="3">{{ $testbloodgroup_id->testbloodgroup_precautions }}</textarea>
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

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                testblood_id: {
                    required : true,
                },
                testbloodgroup_name: {
                    required : true,
                }, 
                testbloodgroup_code: {
                    required : true,
                },
                sampletype_id: {
                    required : true,
                },
                testbloodgroup_price: {
                    required : true,
                },
            },
            messages :{
                testblood_id: {
                    required : 'Please Select Test Blood Name',
                },
                testbloodgroup_name: {
                    required : 'Please Enter Test Blood Group Name',
                },
                testbloodgroup_code: {
                    required : 'Please Enter Test Blood Group Code',
                },
                sampletype_id: {
                    required : 'Please Select Sample Type Name',
                },
                testbloodgroup_price: {
                    required : 'Please Enter Test Blood Group Price',
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