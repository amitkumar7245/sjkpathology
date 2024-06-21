@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Create Payment Mode</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Create Payment Mode</li>
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
                            <form id="myForm" action="{{ route('store.paymentmode') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Payment Mode Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3 form-groups">
                                                    <label for="nameInput" class="form-label">Payment Mode Name</label>
                                                    <input type="text" name="paymentmode_name" class="form-control" id="nameInput" placeholder="Enter your payment mode name">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="mb-3 pb-2">
                                                    <label for="exampleFormControlTextarea" class="form-label">Description</label>
                                                    <textarea class="form-control" name="descripton" id="exampleFormControlTextarea" placeholder="Enter your description" rows="3"></textarea>
                                                </div>
                                            </div>

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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                paymentmode_name: {
                    required : true,
                }, 
            },
            messages :{
                paymentmode_name: {
                    required : 'Please Enter Payment Mode Name',
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



