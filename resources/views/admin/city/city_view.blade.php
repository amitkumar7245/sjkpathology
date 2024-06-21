@extends('layout.app')

@section('dashboard')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">City View</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">City View</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <div class="flex-grow-1">
                                
                                <a href="{{ route('all.city') }}" class="btn btn-primary"><i class="fas fa-list pd-right"></i>City List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">City View</h5>
                    </div>
                
                    <div class="card-body">
                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                            <tr>
                                <th>Country Name:</th>
                                <th>{{ $city_view['getCountry']['country_name'] }}</th>
                            </tr>
                            <tr>
                                <th>State Name:</th>
                                <th>{{ $city_view['getState']['state_name'] }}</th>
                            </tr>
                           <tr>
                               <th>City Name:</th>
                               <th>{{ $city_view->city_name }}</th>
                           </tr>

                           <tr>
                                <th>Status:</th>
                                <th class="text-capitalize">{{ $city_view->status }}</th>
                           </tr>

                           <tr>
                                <th>Created By:</th>
                                <th class="text-capitalize">{{ $city_view['getUser']['created_by'] }}</th>
                           </tr>

                           <tr>
                                <th>Created At:</th>
                                <th>{{ \Carbon\Carbon::parse($city_view->created_at)->format('Y-m-d H:i:s') }}</th>
                           </tr>
                           <tr>
                                <th>Updated At:</th>
                                <th>{{ \Carbon\Carbon::parse($city_view->updated_at)->format('Y-m-d H:i:s') }}</th>
                           </tr>
       
                       </table>
       
                      </div>

                </div>
            </div>
            
        </div>

        

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

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