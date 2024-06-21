@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create Test Sample Type</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Create Test Sample Type</li>
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
                            <form id="myForm" action="{{ route('update.testsampletype') }}" method="post">

                                @csrf
                                <input type="hidden" name="id" value="{{ $sampletype_id->id }}">

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Test Sample Type Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            
                                            <div class="col-lg-4">
                                                <div class="mb-3 form-groups">
                                                    <label for="testsampletypenameInput" class="form-label">Test Sample Type Name</label>
                                                    <input type="text" name="sampletype_name" class="form-control" id="testsampletypenameInput" placeholder="Enter your Test Sample Type Name" value="{{ $sampletype_id->sampletype_name }}">
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
                sampletype_name: {
                    required : true,
                },
                
            },
            messages :{
                sampletype_name: {
                    required : 'Please Enter Test Sample Type Name',
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