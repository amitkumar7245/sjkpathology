@extends('layout.app')

@section('dashboard')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Pathology Sources View</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Pathology Sources View</li>
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
                                
                                <a href="{{ route('all.pathologysource') }}" class="btn btn-primary"><i class="fas fa-list pd-right"></i>Pathology Sources List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pathology Sources View</h5>
                    </div>
                
                    <div class="card-body">
                        <table class="table" style="background:#F4F6FA;font-weight: 600;">
                           <tr>
                               <th>Pathology Sources Name:</th>
                               <th>{{ $sourcesView->source_name }}</th>
                           </tr>
                           <tr>
                                <th>Status:</th>
                                <th class="text-capitalize">{{ $sourcesView->status }}</th>
                           </tr>

                           <tr>
                                <th>Created By:</th>
                                <th class="text-capitalize">{{ $sourcesView['getUser']['created_by'] }}</th>
                           </tr>

                           <tr>
                                <th>Created At:</th>
                                <th>{{ \Carbon\Carbon::parse($sourcesView->created_at)->format('Y-m-d H:i:s') }}</th>
                           </tr>
                           <tr>
                                <th>Updated At:</th>
                                <th>{{ \Carbon\Carbon::parse($sourcesView->updated_at)->format('Y-m-d H:i:s') }}</th>
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
