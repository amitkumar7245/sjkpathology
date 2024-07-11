<div class="app-menu navbar-menu">
    <!-- LOGO -->
    @include('layout.sidebar_logo')

    <!-- End LOGO -->

    @php
        $route = Route::current()->getName();
    @endphp

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                @if (Auth::user()->role == "admin")
                    
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                    <a class="nav-link menu-link {{ ($route ==  'admin.dashboard')? 'active':  '' }}" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i><span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                    <a class="nav-link menu-link {{ ($route ==  'admin.profile')? 'active':  '' }}" href="{{ route('admin.profile') }}">
                        <i class="fas fa-user-circle"></i><span data-key="t-dashboard">Profile</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Patient">
                    <a class="nav-link menu-link {{ ($route ==  'all.patient')? 'active':  '' }}" href="">
                        <i class="fas fa-user-injured"></i><span data-key="t-dashboard">Patients</span>
                    </a>
                </li><!-- end Patient Menu -->  

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Doctor">
                    <a class="nav-link menu-link {{ ($route ==  'all.doctor')? 'active':  '' }}" href="{{ route('all.doctor') }}">
                        <i class="fas fa-user-md"></i> <span data-key="t-dashboard">Doctors</span>
                    </a>
                </li>  <!-- end Doctor Menu --> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Hospital">
                    <a class="nav-link menu-link {{ ($route ==  'all.hospital')? 'active':  '' }}" href="{{ route('all.hospital') }}">
                        <i class="fas fa-hospital"></i> <span data-key="t-dashboard">Hospitals</span>
                    </a>
                </li>  <!-- end Hospital Menu --> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Diagnostic Centres">
                    <a class="nav-link menu-link {{ ($route ==  'all.diagnosticcenter')? 'active':  '' }}" href="{{ route('all.diagnosticcenter') }}">
                        <i class="fas fa-map-marked-alt"></i><span data-key="t-dashboard">Diagnostic Centres</span>
                    </a>
                </li><!-- end Diagnostic Centres Menu --> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Collection Center">
                    <a class="nav-link menu-link {{ ($route ==  'all.collectioncenter')? 'active':  '' }}" href="{{ route('all.collectioncenter') }}">
                        <i class="fas fa-map-marked-alt"></i> <span data-key="t-dashboard">Collection Centers</span>
                    </a>
                </li>  <!-- end Collection Center Menu -->

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Staff">
                    <a class="nav-link menu-link {{ ($route ==  'all.staff')? 'active':  '' }}" href="{{ route('all.staff') }}">
                        <i class="fas fa-users"></i> <span data-key="t-dashboard">Staffs</span>
                    </a>
                </li>  <!-- end Staff Menu --> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Home Visits">
                    <a class="nav-link menu-link {{ ($route == 'home.visits')? 'active': '' }}" href="{{ route('home.visits') }}">
                        <i class="fas fa-home"></i><span data-key="t-dashboard">Home Visits</span>
                    </a>
                </li>  <!-- end Home Visits Menu -->

                {{-- <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Team">
                    <a class="nav-link menu-link" href="#team" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="team">
                        <i class="fas fa-user-friends"></i><span data-key="t-dashboards">Team</span>
                    </a>
                    <div class="collapse menu-dropdown" id="team">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('all.stateteam') }}" class="nav-link" data-key="t-alladmin">State Team Member</a>
                                <a href="{{ route('all.distteam') }}" class="nav-link" data-key="t-alladmin">Dist Team Member</a>
                                <a href="{{ route('all.areateam') }}" class="nav-link" data-key="t-alladmin">Area Team Member</a>
                            </li>
                            
                        </ul>
                    </div>
                </li> <!-- end Team Menu --> --}}

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Zone Name">
                    <a class="nav-link menu-link {{ ($route ==  'all.zone')? 'active':  '' }}" href="{{ route('all.zone') }}">
                        <i class="fas fa-map-marker-alt"></i><span data-key="t-dashboard">Zone Name</span>
                    </a>
                </li>

                <li class="nav-item active" data-bs-toggle="tooltip" data-bs-placement="right" title="Lab Test">
                    <a class="nav-link menu-link" href="#bloodtest" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="bloodtest">
                        <i class="fa fa-flask" aria-hidden="true"></i><span data-key="t-dashboards">Lab Test</span>
                    </a>
                    <div class="collapse menu-dropdown" id="bloodtest">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('all.testblood') }}" class="nav-link menu-link {{ ($route ==  'all.testblood')? 'active':  '' }}" data-key="t-alladmin">Test Blood</a>
                                <a href="{{ route('all.testbloodgroup') }}" class="nav-link menu-link {{ ($route ==  'all.typeoflabtest')? 'active':  '' }}" data-key="t-alladmin">Test Blood Group</a>
                            </li>
                            
                        </ul>
                    </div>
                </li> <!-- end Test Menu -->

                <li class="nav-item active" data-bs-toggle="tooltip" data-bs-placement="right" title="Reports">
                    <a class="nav-link menu-link" href="#reports" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="reports">
                        <i class="far fa-chart-bar"></i><span data-key="t-dashboards">Reports</span>
                    </a>
                    <div class="collapse menu-dropdown" id="reports">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('doctorwise.report') }}" class="nav-link menu-link {{ ($route == 'doctorwise.report')? 'active': '' }}" data-key="t-alladmin">Doctor's Report</a>
                                <a href="{{ route('hospitalwise.report') }}" class="nav-link menu-link {{ ($route == 'hospitalwise.report')? 'active': '' }}" data-key="t-alladmin">Hospital's Report</a>
                                <a href="{{ route('pathologywise.report') }}" class="nav-link menu-link {{ ($route == 'pathologywise.report')? 'active': ''  }}" data-key="t-alladmin">Pathology's Report</a>
                                <a href="{{ route('collectionwise.report') }}" class="nav-link menu-link {{ ($route == 'collectionwise.report')? 'active': '' }}" data-key="t-alladmin">Collection's Report</a>
                            </li>
                            
                        </ul>
                    </div>
                </li> <!-- end Reports Menu -->

                <li class="nav-item active" data-bs-toggle="tooltip" data-bs-placement="right" title="Education">
                    <a class="nav-link menu-link" href="#educationmanage" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="education">
                        <i class="fas fa-user-graduate"></i><span data-key="t-dashboards">Education</span>
                    </a>
                    <div class="collapse menu-dropdown" id="educationmanage">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('all.strem') }}" class="nav-link menu-link {{ ($route ==  'all.strem')? 'active':  '' }}" data-key="t-alladmin">Strem</a>
                                <a href="{{ route('all.substrem') }}" class="nav-link menu-link {{ ($route ==  'all.substrem')? 'active':  '' }}" data-key="t-alladmin">Substrem</a>
                                <a href="{{ route('all.course') }}" class="nav-link menu-link {{ ($route ==  'all.course')? 'active':  '' }}" data-key="t-alladmin">Course</a>
                                <a href="{{ route('all.specialization') }}" class="nav-link menu-link {{ ($route ==  'all.specialization')? 'active':  '' }}" data-key="t-alladmin">Specialization</a>
                            </li>
                            
                        </ul>
                    </div>
                </li> <!-- end Doctors Menu -->

                <li class="nav-item active" data-bs-toggle="tooltip" data-bs-placement="right" title="Master">
                    <a class="nav-link menu-link"  href="#mastermanage" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="mastermanage">
                        <i class="fas fa-user-md"></i><span data-key="t-dashboards">Master</span>
                    </a>
                    <div class="collapse menu-dropdown" id="mastermanage">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('all.bank') }}" class="nav-link menu-link {{ ($route ==  'all.bank')? 'active':  '' }}" data-key="t-alladmin">Bank</a>
                                <a href="{{ route('all.employeetype') }}" class="nav-link menu-link {{ ($route ==  'all.employeetype')? 'active':  '' }}" data-key="t-alladmin">Employee Type</a>
                                <a href="{{ route('all.reportingtype') }}" class="nav-link menu-link {{ ($route ==  'all.reportingtype')? 'active':  '' }}" data-key="t-alladmin">Reporting Type</a>
                                <a href="{{ route('all.department') }}" class="nav-link menu-link {{ ($route ==  'all.department')? 'active':  '' }}" data-key="t-alladmin">Department</a>
                                <a href="{{ route('all.designation') }}" class="nav-link menu-link {{ ($route ==  'all.designation')? 'active':  '' }}" data-key="t-alladmin">Designation</a>
                                <a href="{{ route('all.socialmediatype') }}" class="nav-link menu-link {{ ($route ==  'all.socialmediatype')? 'active':  '' }}" data-key="t-alladmin">SocialMedia Type</a>
                                <a href="{{ route('all.paymentmode') }}" class="nav-link menu-link {{ ($route ==  'all.paymentmode')? 'active':  '' }}" data-key="t-alladmin">Payment Mode</a>

                                <a href="{{ route('all.pathologysource') }}" class="nav-link menu-link {{ ($route ==  'all.pathologysource')? 'active':  '' }}" data-key="t-alladmin">Pathology Source </a>
                                <a href="{{ route('all.testsampletype') }}" class="nav-link menu-link {{ ($route ==  'all.testsampletype')? 'active':  '' }}" data-key="t-alladmin">Lab Test Sample Type </a>
                                <a href="{{ route('all.testunittype') }}" class="nav-link menu-link {{ ($route ==  'all.testunittype')? 'active':  '' }}" data-key="t-alladmin">Lab Test Unit Type</a>
                                
                            </li>
                            
                        </ul>
                    </div>
                </li> <!-- end Master Field Menu -->

                <li class="nav-item active" data-bs-toggle="tooltip" data-bs-placement="right" title="Location">
                    <a class="nav-link menu-link" href="#locationmanage" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="locationmanage">
                        <i class="fas fa-map-marker-alt"></i><span data-key="t-dashboards">Location</span>
                    </a>
                    <div class="collapse menu-dropdown" id="locationmanage">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('all.country') }}" class="nav-link" data-key="t-alladmin">Country</a>
                                <a href="{{ route('all.state') }}" class="nav-link" data-key="t-alladmin">State</a>
                                <a href="{{ route('all.city') }}" class="nav-link" data-key="t-alladmin">City</a>
                            </li>
                            
                        </ul>
                    </div>
                </li> <!-- end Master Field Menu -->

                {{-- <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">ROLES AND PERMISSION</span></li> --}}

                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#roleandpermission" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="las la-pencil-ruler"></i> <span data-key="t-base-ui">Role & Permission</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="roleandpermission">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">All Permission </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges.html" class="nav-link" data-key="t-badges">All Roles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Roles in Permission </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors.html" class="nav-link" data-key="t-colors">All Roles in Permission</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </li> --}}

                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#alladmin" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="las la-pencil-ruler"></i> <span data-key="t-base-ui">All Admin</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="alladmin">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">All Admin </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges.html" class="nav-link" data-key="t-badges">Add Admin</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </li> --}}

               

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Change">
                    <a class="nav-link menu-link {{ ($route ==  '/admin/change/password')? 'active':  '' }}" href="{{ url('/admin/change/password') }}">
                        <i class="fas fa-unlock"></i><span data-key="t-dashboard">Change Password</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                    <a class="nav-link menu-link {{ ($route ==  'auth.logout')? 'active':  '' }}" href="{{ route('auth.logout') }}">
                        <i class="fas fa-sign-out-alt"></i><span data-key="t-dashboard">Logout</span>
                    </a>
                </li>

                @elseif (Auth::user()->role == "doctor")



                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                    <a class="nav-link menu-link {{ ($route ==  'doctor.dashboard')? 'active':  '' }}" href="{{ route('doctor.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i><span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                    <a class="nav-link menu-link {{ ($route ==  'doctor.profile')? 'active':  '' }}" href="{{ route('doctor.profile') }}">
                        <i class="fas fa-user-circle"></i><span data-key="t-dashboard">Profile</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Change">
                    <a class="nav-link menu-link {{ ($route ==  '/doctor/change/password')? 'active':  '' }}" href="{{ url('/doctor/change/password') }}">
                        <i class="fas fa-unlock"></i><span data-key="t-dashboard">Change Password</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                    <a class="nav-link menu-link {{ ($route ==  'auth.logout')? 'active':  '' }}" href="{{ route('auth.logout') }}">
                        <i class="fas fa-sign-out-alt"></i><span data-key="t-dashboard">Logout</span>
                    </a>
                </li>


                @elseif (Auth::user()->role == "staff")



                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                    <a class="nav-link menu-link {{ ($route ==  'staff.dashboard')? 'active':  '' }}" href="{{ route('staff.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i><span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                    <a class="nav-link menu-link {{ ($route ==  'staff.profile')? 'active':  '' }}" href="{{ route('staff.profile') }}">
                        <i class="fas fa-user-circle"></i><span data-key="t-dashboard">Profile</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Change">
                    <a class="nav-link menu-link {{ ($route ==  '/staff/change/password')? 'active':  '' }}" href="{{ url('/staff/change/password') }}">
                        <i class="fas fa-unlock"></i><span data-key="t-dashboard">Change Password</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                    <a class="nav-link menu-link {{ ($route ==  'auth.logout')? 'active':  '' }}" href="{{ route('auth.logout') }}">
                        <i class="fas fa-sign-out-alt"></i><span data-key="t-dashboard">Logout</span>
                    </a>
                </li>

       


                @elseif (Auth::user()->role == "patient")



                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                    <a class="nav-link menu-link {{ ($route ==  'patient.dashboard')? 'active':  '' }}" href="{{ route('patient.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i><span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                    <a class="nav-link menu-link {{ ($route ==  'patient.profile')? 'active':  '' }}" href="{{ route('patient.profile') }}">
                        <i class="fas fa-user-circle"></i><span data-key="t-dashboard">Profile</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Change">
                    <a class="nav-link menu-link {{ ($route ==  '/patient/change/password')? 'active':  '' }}" href="{{ url('/patient/change/password') }}">
                        <i class="fas fa-unlock"></i><span data-key="t-dashboard">Change Password</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                    <a class="nav-link menu-link {{ ($route ==  'auth.logout')? 'active':  '' }}" href="{{ route('auth.logout') }}">
                        <i class="fas fa-sign-out-alt"></i><span data-key="t-dashboard">Logout</span>
                    </a>
                </li>


              

                @elseif (Auth::user()->role == "diagnostic")



                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                    <a class="nav-link menu-link {{ ($route ==  'diagnostic.dashboard')? 'active':  '' }}" href="{{ route('diagnostic.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i><span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                    <a class="nav-link menu-link {{ ($route ==  'diagnostic.profile')? 'active':  '' }}" href="{{ route('diagnostic.profile') }}">
                        <i class="fas fa-user-circle"></i><span data-key="t-dashboard">Profile</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Change">
                    <a class="nav-link menu-link" href="{{ url('/diagnostic/change/password') }}">
                        <i class="fas fa-unlock"></i><span data-key="t-dashboard">Change Password</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                    <a class="nav-link menu-link {{ ($route ==  'auth.logout')? 'active':  '' }}" href="{{ route('auth.logout') }}">
                        <i class="fas fa-sign-out-alt"></i><span data-key="t-dashboard">Logout</span>
                    </a>
                </li>

                @elseif (Auth::user()->role == "collection")



                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard">
                    <a class="nav-link menu-link {{ ($route ==  'collection.dashboard')? 'active':  '' }}" href="{{ route('collection.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i><span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li> 

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Profile">
                    <a class="nav-link menu-link {{ ($route ==  'collection.profile')? 'active':  '' }}" href="{{ route('collection.profile') }}">
                        <i class="fas fa-user-circle"></i><span data-key="t-dashboard">Profile</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Change">
                    <a class="nav-link menu-link {{ ($route ==  '/collection/change/password')? 'active':  '' }}" href="{{ url('/collection/change/password') }}">
                        <i class="fas fa-unlock"></i><span data-key="t-dashboard">Change Password</span>
                    </a>
                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Logout">
                    <a class="nav-link menu-link {{ ($route ==  'auth.logout')? 'active':  '' }}" href="{{ route('auth.logout') }}">
                        <i class="fas fa-sign-out-alt"></i><span data-key="t-dashboard">Logout</span>
                    </a>
                </li> 
                    
                @endif

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>