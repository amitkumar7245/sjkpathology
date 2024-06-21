@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Bank</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Edit Bank</li>
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
                            <form id="myForm" action="{{ route('update.bank') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $bankies->id }}">

                                <div class="tshadow mb25 bozero">
                                    <h4 class="pagetitleh2">Bank Details</h4>
                                    <div class="around10">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="banknameInput" class="form-label">Bank Name</label>
                                                    <input type="text" name="bankname" class="form-control" id="banknameInput" placeholder="Enter your bank name" value="{{ $bankies->bankname }}">
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="bankcodeInput" class="form-label">Bank Code</label>
                                                    <input type="text" name="bankcode" class="form-control" id="bankcodeInput" placeholder="pnb" value="{{ $bankies->bankcode }}">
                                                    
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-lg-3">
                                                <div class="mb-3 form-groups">
                                                    <label for="firstnameInput" class="form-label">Bank Logo</label>
                                                    <input type="file" name="photo" class="form-control" id="image">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-3">
                                                <div class="mb-3">
                                                    <label class="form-label"></label>
                                                    @if (!empty($bankies->banklogo))
                                                    <img id="showImage" src="{{ asset($bankies->banklogo) }}" alt="image" style="width:100px; height:100px;">
                                                        
                                                    @endif
                                                                                                    
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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                bankname: {
                    required : true,
                }, 

                bankcode: {
                required : true,
                },
            },
            messages :{
                bankname: {
                    required : 'Please Enter Bank Name',
                },
                bankcode: {
                required : 'Please Enter Bank Code',
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


