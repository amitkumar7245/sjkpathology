@extends('layout.app')

@section('dashboard')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
                <img src="{{ asset($diagnostic_view->photo) }}" alt="" class="profile-wid-img" />
            </div>
        </div>
        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
            <div class="row g-4">
                <div class="col-auto">
                    <div class="avatar-lg">
                        @if ($diagnostic_view->photo != '')
                            <img src="{{ asset($diagnostic_view->photo) }}" alt="" class="img-thumbnail rounded-circle">
                        @else
                            <img src="{{ asset('backend/assets/images/users/user-dummy-img.jpg') }}" alt="" class="img-thumbnail rounded-circle">
                        @endif
                    </div>
                </div>
                <!--end col-->
                <div class="col">
                    <div class="p-2">
                        <h3 class="text-white mb-1">{{ $diagnostic_view->name ?? 'N/A' }}</h3>
                        <p class="text-white text-opacity-75">Reg.ID:- {{ $diagnostic_view->reg_number ?? 'N/A' }}</p>
                        <div class="hstack text-white-50 gap-1">
                            <div class="me-2"><i class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>{{ $diagnostic_view->address ?? 'N/A' }} </div>
                            
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-12 col-lg-auto order-last order-lg-0">
                    <div class="row text text-white-50 text-center">
                        <div class="col-lg-6 col-4">
                            <div class="p-2">
                                <h4 class="text-white mb-1">24.3K</h4>
                                <p class="fs-14 mb-0">Followers</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-4">
                            <div class="p-2">
                                <h4 class="text-white mb-1">1.3K</h4>
                                <p class="fs-14 mb-0">Following</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->

            </div>
            <!--end row-->
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div>
                    <div class="d-flex profile-wrapper">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#basic-tab" role="tab">
                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Basic Details</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#location" role="tab">
                                    <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Location</span>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#social" role="tab">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Social Media</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                    <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Gallery Images</span>
                                </a>
                            </li>
                        </ul>
                        <div class="flex-shrink-0">
                            <a href="{{ route('edit.diagnosticcenter', $diagnostic_view->id) }}" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content pt-4 text-muted">
                        <div class="tab-pane active" id="basic-tab" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-5">Complete Your Profile</h5>
                                            <div class="progress animated-progress custom-progress progress-label">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="label">30%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Basic Details</h5>
                                            <hr>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        @if ($diagnostic_view)
                                                       
                                                        <tr>
                                                            <th class="ps-0" scope="row">Name :</th>
                                                            <td class="text-muted">{{ $diagnostic_view->name ?? 'N/A' }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th class="ps-0" scope="row">Mobile :</th>
                                                            <td class="text-muted">{{ $diagnostic_view->phone ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                            <td class="text-muted">{{ $diagnostic_view->email ?? 'N/A' }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <th class="ps-0" scope="row">Location :</th>
                                                            <td class="text-muted">{{ $diagnostic_view->diagnostic->locationname ?? 'N/A' }}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Joining Date</th>
                                                            <td class="text-muted">{{ $diagnostic_view->doj ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Aadhar Card Number</th>
                                                            <td class="text-muted">{{ $diagnostic_view->aadharnumber ?? 'N/A' }}</td>
                                                        </tr>
                                                        @else
                                                            <tr>
                                                                <td class="text-muted text-bold" colspan="5" style="font-weight:600;text-align:center;">No basic details available</td>
                                                            </tr>
                                                        @endif
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->

                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end tab-pane-->
                        

                        <div class="tab-pane fade" id="location" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Location Details</h5>
                                            <hr>
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <tbody>
                                                        @if ($diagnostic_view->diagnostic)
                                                        
                                                        <tr>
                                                            <th class="ps-0" scope="row">Country:</th>
                                                            <td class="text-muted">{{ $diagnostic_view->diagnostic->country->country_name ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">State :</th>
                                                            <td class="text-muted">{{ $diagnostic_view->diagnostic->state->state_name ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">City :</th>
                                                            <td class="text-muted">{{ $diagnostic_view->diagnostic->city->city_name ?? 'N/A' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0" scope="row">Location :</th>
                                                            <td class="text-muted">{{ $diagnostic_view->diagnostic->locationname ?? 'N/A' }}</td>
                                                        </tr>

                                                        @else
                                                            <tr>
                                                                <td class="text-muted text-bold" colspan="5" style="font-weight:600;text-align:center;">No details available</td>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end tab-pane-->
                        <div class="tab-pane fade" id="social" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title mb-4">Social Media</h5>
                                            <hr>
                                            <div class="d-flex flex-wrap gap-2">
                                                <div>
                                                    <a href="javascript:void(0);" class="avatar-xs d-block">
                                                        <span class="avatar-title rounded-circle fs-16 bg-body text-body">
                                                            <i class="ri-github-fill"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="avatar-xs d-block">
                                                        <span class="avatar-title rounded-circle fs-16 bg-primary">
                                                            <i class="ri-global-fill"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="avatar-xs d-block">
                                                        <span class="avatar-title rounded-circle fs-16 bg-success">
                                                            <i class="ri-dribbble-fill"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);" class="avatar-xs d-block">
                                                        <span class="avatar-title rounded-circle fs-16 bg-danger">
                                                            <i class="ri-pinterest-fill"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- end card body -->
                                    </div><!-- end card -->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end tab-pane-->
                        
                        <div class="tab-pane fade" id="documents" role="tabpanel">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                        <hr>
                                        <div class="flex-shrink-0">
                                            <input class="form-control d-none" type="file" id="formFile">
                                            <label for="formFile" class="btn btn-danger"><i class="ri-upload-2-fill me-1 align-bottom"></i> Upload
                                                File</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-borderless align-middle mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th scope="col">File Name</th>
                                                            <th scope="col">Type</th>
                                                            <th scope="col">Size</th>
                                                            <th scope="col">Upload Date</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm">
                                                                        <div class="avatar-title bg-primary-subtle text-primary rounded fs-20">
                                                                            <i class="ri-file-zip-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-3 flex-grow-1">
                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0)">Artboard-documents.zip</a>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Zip File</td>
                                                            <td>4.57 MB</td>
                                                            <td>12 Dec 2021</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink15" data-bs-toggle="dropdown" aria-expanded="true">
                                                                        <i class="ri-equalizer-fill"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink15">
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                        </li>
                                                                        <li class="dropdown-divider"></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm">
                                                                        <div class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                            <i class="ri-file-pdf-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-3 flex-grow-1">
                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Bank
                                                                                Management System</a></h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>PDF File</td>
                                                            <td>8.89 MB</td>
                                                            <td>24 Nov 2021</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink3" data-bs-toggle="dropdown" aria-expanded="true">
                                                                        <i class="ri-equalizer-fill"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink3">
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                        </li>
                                                                        <li class="dropdown-divider"></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm">
                                                                        <div class="avatar-title bg-secondary-subtle text-secondary rounded fs-20">
                                                                            <i class="ri-video-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-3 flex-grow-1">
                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Tour-video.mp4</a>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>MP4 File</td>
                                                            <td>14.62 MB</td>
                                                            <td>19 Nov 2021</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink4" data-bs-toggle="dropdown" aria-expanded="true">
                                                                        <i class="ri-equalizer-fill"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink4">
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                        </li>
                                                                        <li class="dropdown-divider"></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm">
                                                                        <div class="avatar-title bg-success-subtle text-success rounded fs-20">
                                                                            <i class="ri-file-excel-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-3 flex-grow-1">
                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Account-statement.xsl</a>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>XSL File</td>
                                                            <td>2.38 KB</td>
                                                            <td>14 Nov 2021</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink5" data-bs-toggle="dropdown" aria-expanded="true">
                                                                        <i class="ri-equalizer-fill"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink5">
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                        </li>
                                                                        <li class="dropdown-divider"></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm">
                                                                        <div class="avatar-title bg-info-subtle text-info rounded fs-20">
                                                                            <i class="ri-folder-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-3 flex-grow-1">
                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Project
                                                                                Screenshots Collection</a>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>Floder File</td>
                                                            <td>87.24 MB</td>
                                                            <td>08 Nov 2021</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink6" data-bs-toggle="dropdown" aria-expanded="true">
                                                                        <i class="ri-equalizer-fill"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink6">
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar-sm">
                                                                        <div class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                            <i class="ri-image-2-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ms-3 flex-grow-1">
                                                                        <h6 class="fs-15 mb-0"><a href="javascript:void(0);">Velzon-logo.png</a>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>PNG File</td>
                                                            <td>879 KB</td>
                                                            <td>02 Nov 2021</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0);" class="btn btn-light btn-icon" id="dropdownMenuLink7" data-bs-toggle="dropdown" aria-expanded="true">
                                                                        <i class="ri-equalizer-fill"></i>
                                                                    </a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink7">
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-center mt-3">
                                                <a href="javascript:void(0);" class="text-success "><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i>
                                                    Load more </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end tab-pane-->
                    </div>
                    <!--end tab-content-->
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->

    </div><!-- container-fluid -->
</div><!-- End Page-content -->

@endsection