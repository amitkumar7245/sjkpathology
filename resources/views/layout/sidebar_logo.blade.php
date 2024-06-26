<div class="navbar-brand-box">
    <!-- Dark Logo-->
    @if (Auth::user()->role == "admin")

    <a href="{{ route('admin.dashboard') }}" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/sjk-logo-header.svg') }}" alt="" height="50">
        </span>
    </a>

    <a href="{{ route('admin.dashboard') }}" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="25">
        </span>
    </a>

    @elseif (Auth::user()->role == "doctor")

    <a href="{{ route('doctor.dashboard') }}" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="50">
        </span>
    </a>

    <a href="{{ route('doctor.dashboard') }}" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="25">
        </span>
    </a>


    @elseif (Auth::user()->role == "staff")

    <a href="{{ route('staff.dashboard') }}" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="50">
        </span>
    </a>

    <a href="{{ route('staff.dashboard') }}" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="25">
        </span>
    </a>

    @elseif (Auth::user()->role == "patient")

    <a href="{{ route('patient.dashboard') }}" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="50">
        </span>
    </a>

    <a href="{{ route('patient.dashboard') }}" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="25">
        </span>
    </a>

    @elseif (Auth::user()->role == "diagnostic")

    <a href="{{ route('diagnostic.dashboard') }}" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="50">
        </span>
    </a>

    <a href="{{ route('diagnostic.dashboard') }}" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="25">
        </span>
    </a>

    @elseif (Auth::user()->role == "collection")

    <a href="{{ route('collection.dashboard') }}" class="logo logo-dark">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="50">
        </span>
    </a>

    <a href="{{ route('collection.dashboard') }}" class="logo logo-light">
        <span class="logo-sm">
            <img src="{{ asset('backend/assets/images/logo/digionweb-sm.png') }}" alt="" height="30">
        </span>
        <span class="logo-lg">
            <img src="{{ asset('backend/assets/images/logo/digionweb-logo.png') }}" alt="" height="25">
        </span>
    </a>
    @endif
    
    <button type="button" class="btn btn-sm p-0 fs-50 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>