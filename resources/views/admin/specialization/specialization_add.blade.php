@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create Specializations</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Create Specializations</li>
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
                            <form id="myForm" action="{{ route('store.specialization') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Specializations Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-4 mb-3">
                                                <label for="strem" class="form-label">Strem</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="strem_id">
                                                    <option>Select Strem </option>
                                                        @foreach ($strem as $item )
                                                            <option value="{{ $item->id }}">{{ $item->strem_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label for="substrem" class="form-label">Substrem</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="substrem_id">
                                                    <option>Select Substrem </option>
                                                        
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label for="course" class="form-label">Course</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="course_id">
                                                    <option>Select Course </option>
                                                        
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3 form-groups">
                                                    <label for="specializationsnameInput" class="form-label">Specializations Name</label>
                                                    <input type="text" name="specialization_name" class="form-control" id="specializationsnameInput" placeholder="Enter your specialization name">
                                                </div>
                                            </div>
                                            <!--end col-->
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                strem_id: {
                    required : true,
                },
                substrem_id: {
                    required : true,
                },
                course_id: {
                    required : true,
                },
                specialization_name: {
                    required : true,
                },
            },
            messages :{
                strem_id: {
                    required : 'Please Select Strem Name',
                },
                substrem_id: {
                    required : 'Please Select Substrem Name',
                },
                course_id: {
                    required : 'Please Select Course Name',
                },
                specialization_name: {
                    required : 'Please Enter Specialization Name',
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

<script type="text/javascript">
    $(document).ready(function(){
        $('select[name="strem_id"]').on('change', function(){
            var strem_id = $(this).val();
            if (strem_id) {
                $.ajax({
                    url: "{{ url('/specializationstrem/ajax') }}/"+strem_id,
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
                    url: "{{ url('/specializationsubstrem/ajax') }}/"+substrem_id,
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

@endsection



