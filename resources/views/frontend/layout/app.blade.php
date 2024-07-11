<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sarvajanik Janch Kendra | Top best Pathology Lab for Blood Test Bighapur</title>
    <meta name="description" content="SJK Labs, a premier blood test laboratory in India, provides comprehensive Pathology Center services and an extensive array of diagnostic tests. Book your test online for convenient home collection.">
    <meta name="keywords" content="">
    {{-- <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.png') }}" type="image/x-icon"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/swiper/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>

<body class="home-pg-twelve">

    <div class="main-wrapper">

        @include('frontend.layout.header')

        @yield('frontend')

        @include('frontend.layout.footer')

        {{-- <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div> --}}

    </div>
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>


    <script data-cfasync="false" src="{{ asset('frontend/assets/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/feather.min.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/moment.min.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-datetimepicker.min.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/slick.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/plugins/swiper/js/swiper-bundle.min.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/plugins/select2/js/select2.min.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/aos.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/jquery.waypoints.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/backToTop.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>

    <script src="{{ asset('frontend/assets/js/script.js') }}" type="ffcdb64f2700b2d04c0c39a5-text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/rocket-loader.min.js') }}" data-cf-settings="ffcdb64f2700b2d04c0c39a5-|49"
        defer></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
     @if(Session::has('message'))
     var type = "{{ Session::get('alert-type','info') }}"
     switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
    
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
    
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
    
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break; 
     }
     @endif 
    </script>    
</body>

</html>
