@extends('layout.app')

@section('dashboard')

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col">

                <div class="h-100">
                    <div class="row mb-3 pb-1">
                        <div class="col-12">
                            <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                <div class="flex-grow-1">
                                    <h4 class="fs-16 mb-1">Welcome, {{ Auth::user()->name }}!</h4>
                                    <p class="text-muted mb-0">Here's what's happening with your Pathology today.</p>
                                </div>
                                <div class="mt-3 mt-lg-0">
                                    <form action="javascript:void(0);">
                                        <div class="row g-3 mb-0 align-items-center">
                                            <div class="col-sm-auto">
                                                <div class="input-group">
                                                    <input type="text" class="form-control border-0 fs-13 dash-filter-picker shadow flatpickr-input active" data-provider="flatpickr" data-range-date="true" data-date-format="d M, Y" data-deafult-date="01 Jan 2022 to 31 Jan 2022" readonly="readonly">
                                                    <div class="input-group-text bg-secondary border-secondary text-white">
                                                        <i class="ri-calendar-2-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                            </div><!-- end card header -->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Patient List</h5>
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
                                                <th>Name</th>
                                                <th>Mobile No.</th>
                                                <th>Email</th>
                                                <th>Created By</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($stafflist as $key => $item )
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
                                                                    <img src="{{ asset($item->photo) }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                @else
                                                                    @if ($item->gender == '1') <!-- Assuming '1' for Male -->
                                                                        <img src="{{ asset('backend/assets/images/users/male-dummy.png') }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                    @elseif ($item->gender == '0') <!-- Assuming '0' for Female -->
                                                                        <img src="{{ asset('backend/assets/images/users/female-dummy.png') }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                    @else
                                                                        <img src="{{ asset('backend/assets/images/users/user-dummy-img.jpg') }}" alt="" class="avatar-xxs rounded-circle image_src object-fit-cover">
                                                                    @endif
                                                                @endif
                                                                
                                                            </div>
                                                            <div class="flex-grow-1 ms-2 name">{{ $item->name }}</div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->staff && $item->staff->creator ? $item->staff->creator->name : $item->name }}</td>
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
                                                                <li><a href="{{ route('print.staff', $item->id) }}" class="dropdown-item"><i class="ri-printer-fill align-bottom me-2 text-muted"></i>Print</a></li>
                                                                <li><a href="{{ route('view.staff', $item->id) }}" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                                <li><a href="{{ route('edit.staff', $item->id) }}" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="{{ route('delete.staff', $item->id) }}" id="delete" class="dropdown-item remove-item-btn">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                                </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        @if ($item->staff && $item->staff->status == 'active')
                                                            <a href="{{ route('inactive.staff', $item->id) }}" class="btn btn-primary btn-sm" title="Inactive"> <i class="fa-solid fa-thumbs-up"></i></a>
                                                        @else
                                                            <a href="{{ route('active.staff', $item->id) }}" class="btn btn-danger btn-sm" title="Active"> <i class="fa-solid fa-thumbs-down"></i></a>
                                                        @endif
            
                                                        <a href="{{ route('idcardprofile.staff', $item->id) }}" class="btn btn-primary btn-sm" title="Prnit"><i class="fas fa-print"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- end .h-100-->

            </div> <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
</div>

@endsection