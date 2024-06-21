@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Substrem</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Edit Substrem</li>
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
                            <form id="myForm" action="{{ route('update.substrem') }}" method="post">
                                @csrf

                                <input type="hidden" name="id" value="{{ $substrem_id->id }}">

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Substrem Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="strem" class="form-label">Strem</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="strem_id">
                                                    <option>Select Strem </option>
                                                        @foreach ($strem as $item)
                                                            <option value="{{ $item->id }}" {{ $item->id == $substrem_id->strem_id ? 'selected' : '' }} >{{ $item->strem_name }}</option>
                                                        @endforeach
                                                    
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3 form-groups">
                                                    <label for="substremnameInput" class="form-label">Substrem Name</label>
                                                    <input type="text" name="substrem_name" class="form-control" id="substremnameInput" placeholder="Enter your Substrem Name" value="{{ $substrem_id->substrem_name }}">
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

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                strem_id: {
                    required : true,
                },
                substrem_name: {
                    required : true,
                }, 
            },
            messages :{
                strem_id: {
                    required : 'Please Select Strem Name',
                },
                substrem_name: {
                    required : 'Please Enter Substrem Name',
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