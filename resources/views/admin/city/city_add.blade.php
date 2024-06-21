@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create City</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Create City</li>
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
                            <form id="myForm" action="{{ route('store.city') }}" method="post">
                                
                                @csrf

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">City Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label for="country" class="form-label">Country</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="country_id">
                                                    <option>Select Country </option>
                                                    @foreach ($country as $item )
                                                        <option value="{{ $item->id }}">{{ $item->country_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <label for="state" class="form-label">State</label>
                                                <select class="js-example-basic-single mb-3 form-groups" name="state_id">
                                                    <option>Select State </option>
                                                    
                                                </select>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-4">
                                                <div class="mb-3 form-groups">
                                                    <label for="citynameInput" class="form-label">City Name</label>
                                                    <input type="text" name="city_name" class="form-control" id="citynameInput" placeholder="Enter your city name">
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
                country_id: {
                    required : true,
                },
                state_id: {
                    required : true,
                }, 
                city_name: {
                    required : true,
                },
            },
            messages :{
                country_id: {
                    required : 'Please Enter Country Name',
                },
                state_id: {
                    required : 'Please Enter State Name',
                },
                city_name: {
                    required : 'Please Enter City Name',
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
        $('select[name="country_id"]').on('change', function(){
            var country_id = $(this).val();
            if (country_id) {
                $.ajax({
                    url: "{{ url('/areastate/ajax') }}/"+country_id,
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

@endsection