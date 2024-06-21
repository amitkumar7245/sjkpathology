@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">All Diagnostic Centres</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Diagnostic Centres</li>
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
                                
                                <a href="{{ route('add.diagnosticcenter') }}" class="btn btn-primary"><i class="ri-add-fill me-1 align-bottom"></i>Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">All Diagnostic Centres</h5>
                    </div>
                    <div class="card-body">
                        <table id="buttons-datatables" class="table table-bordered table-hover dt-responsive nowrap align-middle mdl-data-table dataTable no-footer" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 10px;">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                        </div>
                                    </th>
                                    <th>SR No.</th>
                                    <th>Reg. No.</th>
                                    <th>Lab Name</th>
                                    <th>Mobile No.</th>
                                    <th>Email</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Created By</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($diagnosticCenters as $key => $item )
                            
                                <tr>
                                    <th scope="row">
                                        <div class="form-check">
                                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                        </div>
                                    </th>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->reg_number}}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                @if ($item->photo != '')
                                                        <img src="{{ asset('upload/diagnostic_images/'.$item->photo) }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                    @else
                                                        <img src="{{ asset('backend/assets/images/users/user-dummy-img.jpg') }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                @endif
                                            </div>
                                            <div class="flex-grow-1 ms-2 name">{{ $item->name }}</div>
                                        </div>
                                    </td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ optional(optional($item->diagnostic)->state)->state_name }}</td>
                                    <td>{{ optional(optional($item->diagnostic)->city)->city_name }}</td>
                                    <td>{{ $item->diagnostic && $item->diagnostic->creator ? $item->diagnostic->creator->name : $item->name }}</td>

                                    @if ($item->status == 'active')
                                    <td class="status"><span class="badge bg-success-subtle text-success text-uppercase">Active</span></td>
                                    @else
                                    <td class="status"><span class="badge bg-danger-subtle text-danger text-uppercase">Deactive</span></td> 
                                    @endif 

                                   
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-soft-secondary btn-sm dropdown dropdown-toggle show" type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                                  <i class="ri-settings-3-line"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a href="{{ route('view.diagnosticcenter', $item->id) }}" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                <li><a href="{{ route('edit.diagnosticcenter', $item->id) }}" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                <li><a href="{{ route('delete.diagnosticcenter',$item->id) }}" id="delete" class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                            </ul>
                                        </div>
                                        @if ($item->diagnostic && $item->diagnostic->status == 'active')
                                                <a href="{{ route('inactive.diagnosticcenter', $item->id) }}" class="btn btn-primary btn-sm" title="Inactive"> <i class="fa-solid fa-thumbs-up"></i></a>
                                            @else
                                                <a href="{{ route('active.diagnosticcenter', $item->id) }}" class="btn btn-danger btn-sm" title="Active"> <i class="fa-solid fa-thumbs-down"></i></a>
                                        @endif
                                    </td>
                                    
                                </tr>
                                
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>

        

    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->


@endsection