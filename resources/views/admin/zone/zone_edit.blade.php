@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Zone Edit</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Edit Zone</li>
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
                        <form id="myForm" action="{{ route('update.zone') }}" method="post">

                            @csrf

                            <input type="hidden" name="id" value="{{ $zone_id->id }}">

                            <div class="tshadow mb25 bozero">
                                <h4 class="pagetitleh2">Zone Details</h4>
                                <div class="around10">
                                    <div class="row">
                                        
                                        <div class="col-lg-4">
                                            <div class="mb-3 form-groups">
                                                <label for="zonenameInput" class="form-label label-required">Zone Name</label>
                                                <input type="text" name="zone_name" class="form-control" id="zonenameInput" placeholder="Enter your Zone Name" value="{{ $zone_id->zone_name }}">
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
                zone_name: {
                    required : true,
                },
                
            },
            messages :{
                zone_name: {
                    required : 'Please Enter Zone Name',
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

<script>
    $(document).ready(function() {
        if (!$.fn.dataTable.isDataTable('#buttons-datatables')) {
            var table = $('#buttons-datatables').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        }
    });
</script>

@endsection