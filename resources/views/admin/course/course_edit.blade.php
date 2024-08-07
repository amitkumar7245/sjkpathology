@extends('layout.app')


@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Course</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Edit Course</li>
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
                            <form id="myForm" action="{{ route('update.course') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $course_id->id }}">

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Course Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="strem" class="form-label">Strem</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="strem_id">
                                                    <option>Select Strem </option>
                                                        @foreach ($strem as $item )
                                                            <option value="{{ $item->id }}"{{ $item->id == $course_id->strem_id ? 'selected' : '' }}>{{ $item->strem_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label for="substrem" class="form-label">Substrem</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="substrem_id">
                                                    <option>Select Substrem </option>
                                                        @foreach ($substrem as $item)
                                                            <option value="{{ $item->id }}"{{ $item->id == $course_id->substrem_id ? 'selected' : '' }}>{{ $item->substrem_name }}</option>
                                                        @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3 form-groups">
                                                    <label for="coursenameInput" class="form-label">Course Name</label>
                                                    <input type="text" name="course_name" class="form-control" id="coursenameInput" placeholder="Enter your course name" value="{{ $course_id->course_name }}">
                                                </div>
                                            </div>
                                            <!--end col-->
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                strem_id: {
                    required : true,
                },
                substrem_id: {
                    required : true,
                },
                course_name: {
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
                course_name: {
                    required : 'Please Enter Course Name',
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
                    url: "{{ url('/coursestrem/ajax') }}/"+strem_id,
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

@endsection



