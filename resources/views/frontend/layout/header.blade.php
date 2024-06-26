<header class="header header-fixed header-fourteen header-twelve header-thirteen">
    <div class="container">
        <nav class="navbar navbar-expand-lg header-nav">
            <div class="navbar-header">
                <a id="mobile_btn" href="javascript:void(0);">
                    <span class="bar-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </a>
                <a href="" class="navbar-brand logo">
                    <img src="{{ asset('frontend/assets/img/logo-header.svg') }}" class="img-fluid" alt="Logo">
                </a>
            </div>
            <div class="main-menu-wrapper">
                <div class="menu-header">
                    <a href="" class="menu-logo">
                        <img src="{{ asset('frontend/assets/img/logo-header.svg') }}" class="img-fluid" alt="Logo">
                    </a>
                    <a id="menu_close" class="menu-close" href="javascript:void(0);">
                        <i class="fas fa-times"></i>
                    </a>
                </div>
                <ul class="main-nav">
                    <li class="active"><a href="#" target="_blank">Home</a></li>
                    <li><a href="#" target="_blank">About Us</a></li>
                    <li><a href="#" target="_blank">Book a Test</a></li>
                    <li><a href="#" target="_blank">Health Checkup</a></li>
                    <li><a href="#" target="_blank">Contact Us</a></li>

                    <li class="login-link"><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
            <ul class="nav header-navbar-rht">
                <li class="login-in-fourteen">
                    <a href="{{ route('login') }}" class="btn reg-btn log-btn-twelve">Log In</a>
                </li>

            </ul>
        </nav>
    </div>
</header>
