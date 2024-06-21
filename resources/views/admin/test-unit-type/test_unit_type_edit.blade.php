@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Test Unit Type</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Edit Test Unit Type</li>
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
                            <form id="myForm" action="{{ route('update.testunittype') }}" method="post">

                                @csrf
                                <input type="hidden" name="id" value="{{ $unittype_id->id }}">

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Test Unit Type Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            
                                            <div class="col-lg-4">
                                                <div class="mb-3 form-groups">
                                                    <label for="unittypenameInput" class="form-label">Test Unit Type Name</label>
                                                    <input type="text" name="unittype_name" class="form-control" id="unittypenameInput" placeholder="Enter your Test Unit Type Name" value="{{ $unittype_id->unittype_name }}">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3 form-groups">
                                                    <label for="unittypecodeInput" class="form-label">Test Unit Type Code</label>
                                                    <input type="text" name="unittype_code" class="form-control" id="unittypecodeInput" placeholder="Enter your Test Unit Type Code" value="{{ $unittype_id->unittype_code }}">
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

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                unittype_name: {
                    required : true,
                },
                unittype_code: {
                    required : true,
                },
                
            },
            messages :{
                unittype_name: {
                    required : 'Please Enter Test Unit Type Name',
                },
                unittype_code: {
                    required : 'Please Enter Test Unit Type Code',
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