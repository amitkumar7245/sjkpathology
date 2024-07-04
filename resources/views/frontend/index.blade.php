@extends('frontend.layout.app')

@section('frontend')

    <section class="banner-sec-twelve">

        <div class="section-small-imgs">
            <img src="{{ asset('frontend/assets/img/icons/section-small-icon-01.svg') }}" class="small-icon-one"
                alt="Img">
            <img src="{{ asset('frontend/assets/img/icons/section-small-icon-02.svg') }}" class="small-icon-two"
                alt="Img">
        </div>
        <div class="container">
            <div class="row justify-content-center">


                <div class="col-lg-8">
                    <div class="banner-content-twelve">
                        <div class="banner-title-twelve aos" data-aos="fade-up" data-aos-delay="400">
                            <h1>Now You Can Book Lab Test at Home</h1>
                            <p>Comprehensive Lab Testing for Informed Health</p>
                        </div>
                        <div class="banner-form-field">
                            <span>Home Visit</span>
                            <form action>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="input-block">
                                            <div class="icon-badge">
                                                <span><i class="feather-user"></i></span>
                                            </div>
                                            <div class="banner-input-box">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" placeholder="Amit Kumar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="input-block">
                                            <div class="icon-badge">
                                                <span><i class="feather-smartphone"></i></span>
                                            </div>
                                            <div class="banner-input-box">
                                                <label class="form-label">Mobile Number</label>
                                                <input type="text" class="form-control" placeholder="+91-8920XXXXX">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="input-block">
                                            <div class="icon-badge">
                                                <span><i class="feather-mail"></i></span>
                                            </div>
                                            <div class="banner-input-box">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="amit@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-md-6">
                                        <div class="input-block">
                                            <div class="icon-badge">
                                                <span><i class="feather-map-pin"></i></span>
                                            </div>
                                            <div class="banner-input-box">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Home-12,Gali No.12,Village-Pahi Hardo,Post-Bighapur,Dist.Unnao">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-btns">
                                    <a href="#" class="btn appoint-btn"><i class="feather-smartphone me-2"></i>Book an
                                        Appointment</a>
                                </div>
                            </form>
                        </div>
                        <div class="banner-counter">
                            <div class="row justify-content-center">
                                <div class="col-md-4 col-sm-6">
                                    <div class="counter-twelve bg-purple-color" data-aos="fade-up" data-aos-delay="400">
                                        <span class="hexagon"></span>
                                        <h3><span class="counter">5</span>+</h3>
                                        <h5>Collection points</h5>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="counter-twelve bg-violet-color" data-aos="fade-up" data-aos-delay="500">
                                        <span class="hexagon"></span>
                                        <h3><span class="counter">10</span>Lakh+</h3>
                                        <h5>Reports Delivered</h5>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="counter-twelve bg-blue-color" data-aos="fade-up" data-aos-delay="600">
                                        <span class="hexagon"></span>
                                        <h3><span class="counter">35</span>+</h3>
                                        <h5>Expert Specialists</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-all-lab" data-aos="fade-up">
                            <span><img src="{{ asset('frontend/assets/img/icons/lab-view-icon.svg') }}"
                                    alt="Img"></span>
                            <h5>View all Offers on Lab tests !!!</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-10">
                    <div class="swiper swiper-slider-banner">
                        <div class="swiper-wrapper aos" data-aos="fade-up" data-aos-delay="400">

                            <div class="swiper-slide">
                                <div class="img-swiper">
                                    <a href="#"><img src="{{ asset('frontend/assets/img/slider/pregnancy.svg') }}"
                                            class="img-fluid" alt="pregnancy"></a>
                                </div>
                                <div class="swiper-content-card">
                                    <h4><a href="#">Pregnancy Test</a></h4>
                                    <span class="badge">Includes 50 Parameters</span>
                                    <div class="cost-pay">
                                        <h5>₹599<span>₹699</span></h5>
                                        <a href="#" class="slider-buy-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="img-swiper">
                                    <a href="#"><img
                                            src="{{ asset('frontend/assets/img/slider/diabeties-test.svg') }}"
                                            class="img-fluid" alt="diabeties-test"></a>
                                </div>
                                <div class="swiper-content-card">
                                    <h4><a href="#">Diabeties Test</a></h4>
                                    <span class="badge">Includes 70 Parameters</span>
                                    <div class="cost-pay">
                                        <h5>₹599<span>₹699</span></h5>
                                        <a href="#" class="slider-buy-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="img-swiper">
                                    <a href="#"><img src="{{ asset('frontend/assets/img/slider/liver-test.svg') }}"
                                            class="img-fluid" alt="liver-test"></a>
                                </div>
                                <div class="swiper-content-card">
                                    <h4><a href="#">Liver Test</a></h4>
                                    <span class="badge">Includes 80 Parameters</span>
                                    <div class="cost-pay">
                                        <h5>₹599<span>₹699</span></h5>
                                        <a href="#" class="slider-buy-btn">Book Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="testimonial-bottom-nav">
                            <div class="slide-next-btn testimonial-next-pre"><i class="fas fa-arrow-left"></i></div>
                            <div class="slide-prev-btn testimonial-next-pre"><i class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="doctor-category">
        <div class="container">
            <div class="row radius-inner">
                <div class="col-md-3 aos" data-aos="fade-up">
                    <div class="pop-box">
                        <div class="top-section">
                            <div class="cat-icon"><img src="{{ asset('frontend/assets/img/icons/x-rays.png') }}">
                                <!--<i class="fas fa-procedures"></i>-->
                            </div>
                        </div>
                        <div class="body-section">
                            <h3>X-Rays, Scans and MRI Tests</h3>
                            <p>Up to 30% off</p>
                            <a href="#" class="btn book-btn" tabindex="0">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 aos" data-aos="fade-up">
                    <div class="pop-box">
                        <div class="top-section two">
                            <div class="cat-icon">
                                <img src="{{ asset('frontend/assets/img/icons/medical-icon-03.svg') }}">
                            </div>
                        </div>
                        <div class="body-section">
                            <h3>All Tests</h3>
                            <p>Blood Tests</p>
                            <a href="#" class="btn book-btn" tabindex="0">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 aos" data-aos="fade-up">
                    <div class="pop-box">
                        <div class="top-section three">
                            <div class="cat-icon">
                                <img src="{{ asset('frontend/assets/img/icons/medical-icon-03.svg') }}">
                            </div>
                        </div>
                        <div class="body-section">
                            <h3>Book a Call</h3>
                            <p>SJK Lab</p>
                            <a href="#" class="btn book-btn" tabindex="0">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 aos" data-aos="fade-up">
                    <div class="pop-box">
                        <div class="top-section three">
                            <div class="cat-icon">
                                <img src="{{ asset('frontend/assets/img/icons/medical-icon-01.svg') }}">
                            </div>
                        </div>
                        <div class="body-section">
                            <h3>Health Packages</h3>
                            <p>SJK Health Packages</p>
                            <a href="#" class="btn book-btn" tabindex="0">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="specialities-section-one">
        <div class="container">
            <div class="row radius-inner">
                <div class="col-md-9 aos" data-aos="fade-up">
                    <div class="section-header-one section-header-slider">
                        <h2 class="section-title">Popular Tests</h2>
                        <p>Discover Our Popular Lab Tests, Unlock Key Health Insights with Trusted Diagnostic Services.</p>
                    </div>
                </div>
                <div class="col-md-3 aos" data-aos="fade-up">
                    <div class="owl-nav slide-nav-1 text-end nav-control"></div>
                </div>
                <div class="owl-carousel specialities-slider-one owl-theme aos" data-aos="fade-up">
                    <div class="item">
                        <div class="specialities-item">
                            <div class="specialities-img">
                                <span><img src="{{ asset('frontend/assets/img/specialities/specialities-01.svg') }}"
                                        alt="heart-image"></span>
                            </div>
                            <p>Diabeties</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="specialities-item">
                            <div class="specialities-img">
                                <span><img src="{{ asset('frontend/assets/img/specialities/specialities-02.svg') }}"
                                        alt="brain-image"></span>
                            </div>
                            <p>Liver</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="specialities-item">
                            <div class="specialities-img">
                                <span><img src="{{ asset('frontend/assets/img/specialities/specialities-03.svg') }}"
                                        alt="kidney-image"></span>
                            </div>
                            <p>Kidney</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="specialities-item">
                            <div class="specialities-img">
                                <span><img src="{{ asset('frontend/assets/img/specialities/specialities-04.svg') }}"
                                        alt="bone-image"></span>
                            </div>
                            <p>Fever</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="specialities-item">
                            <div class="specialities-img">
                                <span><img src="{{ asset('frontend/assets/img/specialities/specialities-05.svg') }}"
                                        alt="dentist"></span>
                            </div>
                            <p>Thyroid</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="specialities-item">
                            <div class="specialities-img">
                                <span><img src="{{ asset('frontend/assets/img/specialities/specialities-06.svg') }}"
                                        alt="eye-image"></span>
                            </div>
                            <p>Full Body</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="specialities-item">
                            <div class="specialities-img">
                                <span><img src="{{ asset('frontend/assets/img/specialities/specialities-02.svg') }}"
                                        alt="brain-image"></span>
                            </div>
                            <p>Allergy</p>
                        </div>
                    </div>
                </div>
                <div class="specialities-btn aos" data-aos="fade-up">
                    <a href="" class="btn">View All</a>
                </div>
            </div>
        </div>
    </section>
    <section class="browse-section">
        <div class="container">
            <div class="row radius-inner">
                <div class="section-header-one section-header-slider">
                    <h2 class="section-title">Search By Relevance</h2>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/diabetes.svg') }}" alt="diabetes">
                            </div>
                            <h4>Diabetes</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/pregnancy.svg') }}" alt="pregnancy">
                            </div>
                            <h4>Pregnancy</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/thyroid.svg') }}" alt="thyroid">
                            </div>
                            <h4>Thyroid</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/liver.svg') }}" alt="liver">
                            </div>
                            <h4>Liver</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/kidney.svg') }}" alt="kidney">
                            </div>
                            <h4>Kidney</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/fever.svg') }}" alt="fever">
                            </div>
                            <h4>Fever</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/allergy.svg') }}" alt="allergy">
                            </div>
                            <h4>Allergy</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/cancer.svg') }}" alt="cancer">
                            </div>
                            <h4>Cancer</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/breast.svg') }}" alt="breast">
                            </div>
                            <h4>Breast</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/heart.svg') }}" alt="heart">
                            </div>
                            <h4>Heart</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/prostate.svg') }}" alt="prostate">
                            </div>
                            <h4>Prostate</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 aos" data-aos="fade-up">
                    <div class="brower-box">
                        <div>
                            <div class="brower-img">
                                <img src="{{ asset('frontend/assets/img/shapes/bone.svg') }}" alt="bone">
                            </div>
                            <h4>Bone</h4>
                            <!--<p>124 <span>Doctors</span></p>-->
                        </div>
                    </div>
                </div>
                <div class="view-all-more text-center aos" data-aos="fade-up">
                    <a href="#" class="btn btn-primary">View All</a>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-test-section">
        <div class="container">
            <div class="row radius-inner">
                <div class="section-head-twelve">
                    <h2>Explore More</h2>
                </div>
                <div class="medical-emergency-booking">
                    <div class="doctor-consulting-slider owl-carousel">
                        <div class="medical-emergency-card">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="slider-img">
                                        <img src="{{ asset('frontend/assets/img/bg/slider-bg-img.png') }}"
                                            class="img-fluid" alt="Img">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-content aos" data-aos="fade-up" data-aos-delay="600">
                                        <h3>Chest Pain?</h3>
                                        <span>Check if you are risk at a Heart Attack</span>
                                        <p>Get a test report in an Hour & care your heart at our
                                            Specialist Advice
                                        </p>
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="medical-emergency-card">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="slider-img">
                                        <img src="{{ asset('frontend/assets/img/bg/slider-bg-img.png') }}"
                                            class="img-fluid" alt="Img">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="slider-content">
                                        <h3>Chest Pain?</h3>
                                        <span>Check if you are risk at a Heart Attack</span>
                                        <p>Get a test report in an Hour & care your heart at our
                                            Specialist Advice</p>
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="features-section-sixteen">
        <div class="container">
            <div class="row radius-inner">
                <div class="section-head-twelve">
                    <h2>Featured Packages</h2>
                    <p> Explore Our Top-Tier Packages for Your Personalized Wellness Experience</p>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel feature-package-slider">
                        <div class="feature-package-card" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-package-type">
                                <h3>Women's Health Check-up</h3>
                                <div class="package-cost">
                                    <h6>15 Test Included</h6>
                                    <h5>₹2299 <span>₹2499</span></h5>
                                </div>
                                <a href="#" class="package-book-btn">Book Now</a>
                            </div>
                            <div class="package-img">
                                <img src="{{ asset('frontend/assets/img/features/package-card-img-03.png') }}"
                                    class="package-img-user" alt="Img">
                                <img src="{{ asset('frontend/assets/img/bg/package-card-bg-01.png') }}"
                                    class="package-img-bg" alt="Img">
                            </div>
                        </div>
                        <div class="feature-package-card family-pack" data-aos="fade-up" data-aos-delay="600">
                            <div class="feature-package-type">
                                <h3>Family Package for 3 Members</h3>
                                <div class="package-cost">
                                    <h6>15 Test Included - 55% off</h6>
                                    <h5>₹2299 <span>₹2499</span></h5>
                                </div>
                                <a href="#" class="package-book-btn">Book Now</a>
                            </div>
                            <div class="package-img">
                                <img src="{{ asset('frontend/assets/img/features/package-card-img-02.png') }}"
                                    class="package-img-user" alt="Img">
                                <img src="{{ asset('frontend/assets/img/bg/package-card-bg-03.png') }}"
                                    class="package-img-bg" alt="Img">
                            </div>
                        </div>
                        <div class="feature-package-card mens-health" data-aos="fade-up" data-aos-delay="700">
                            <div class="feature-package-type">
                                <h3>Men's Health Check-up</h3>
                                <div class="package-cost">
                                    <h6>15 Test Included - 55% off</h6>
                                    <h5>₹2299 <span>₹2499</span></h5>
                                </div>
                                <a href="#" class="package-book-btn">Book Now</a>
                            </div>
                            <div class="package-img">
                                <img src="{{ asset('frontend/assets/img/features/package-card-img-01.png') }}"
                                    class="package-img-user" alt="Img">
                                <img src="{{ asset('frontend/assets/img/bg/package-card-bg-02.png') }}"
                                    class="package-img-bg" alt="Img">
                            </div>
                        </div>
                        <div class="feature-package-card family-pack" data-aos="fade-up" data-aos-delay="800">
                            <div class="feature-package-type">
                                <h3>Family Package for 3 Members</h3>
                                <div class="package-cost">
                                    <h6>15 Test Included - 55% off</h6>
                                    <h5>₹2299 <span>₹2499</span></h5>
                                </div>
                                <a href="#" class="package-book-btn">Book Now</a>
                            </div>
                            <div class="package-img">
                                <img src="{{ asset('frontend/assets/img/features/package-card-img-02.png') }}"
                                    class="package-img-user" alt="Img">
                                <img src="{{ asset('frontend/assets/img/bg/package-card-bg-03.png') }}"
                                    class="package-img-bg" alt="Img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="best-packages-section">
        <div class="section-bg">
            <img src="{{ asset('frontend/assets/img/bg/section-bg-03.png') }}" class="best-pack-bg-one" alt="Img">
            <img src="{{ asset('frontend/assets/img/bg/section-bg-04.png') }}" class="best-pack-bg-two" alt="Img">
        </div>
        <div class="container">
            <div class="row radius-inner">
                <div class="section-head-twelve">
                    <h2>Best Packages</h2>
                    <p> Explore Our Top-Tier Packages for Your Personalized Wellness Experience</p>
                </div>
                <ul class="nav nav-pills inner-tab" id="pills-tab2" role="tablist" data-aos="fade-up"
                    data-aos-delay="500">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                            aria-selected="false">All Packages</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-family-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-family" type="button" role="tab" aria-controls="pills-family"
                            aria-selected="true">Family Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-adult-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-adult" type="button" role="tab" aria-controls="pills-adult"
                            aria-selected="false">Adult Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-accident-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-accident" type="button" role="tab"
                            aria-controls="pills-accident" aria-selected="false">Accident Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-fitness-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-fitness" type="button" role="tab" aria-controls="pills-fitness"
                            aria-selected="false">Fitness Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-explore-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-explore" type="button" role="tab" aria-controls="pills-explore"
                            aria-selected="false">Explore More</button>
                    </li>
                </ul>
                <div class="tab-content pt-0 dashboard-tab">
                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹800 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-family" role="tabpanel" aria-labelledby="pills-family-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-adult" role="tabpanel" aria-labelledby="pills-adult-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-accident" role="tabpanel" aria-labelledby="pills-accident-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-fitness" role="tabpanel"
                        aria-labelledby="pills-fitness-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-explore" role="tabpanel"
                        aria-labelledby="pills-explore-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="best-packages-section">
        <div class="container">
            <div class="row radius-inner">
                <div class="how-it-work">
                    <div class="section-head-twelve">
                        <h2>How It Works</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="500">
                            <div class="work-box">
                                <div class="work-icon">
                                    <img src="{{ asset('frontend/assets/img/icons/booking-made-easy.svg') }}"
                                        alt="booking-made-easy">
                                </div>
                                <h4>1. Booking Made Easy</h4>
                                <p>Book on our website, or request a Health Advisor callback</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="600">
                            <div class="work-box bg-blue">
                                <div class="work-icon">
                                    <img src="{{ asset('frontend/assets/img/icons/customer-support.svg') }}"
                                        alt="guidance">
                                </div>
                                <h4>2. Guidance</h4>
                                <p>Health Advisor & medical advisor provide guidance of testing process</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="700">
                            <div class="work-box bg-green">
                                <div class="work-icon">
                                    <img src="{{ asset('frontend/assets/img/icons/blood-test.svg') }}" alt="Img">
                                </div>
                                <h4>3. Sample Collection</h4>
                                <p>Enjoy the convenience of free sample collection right at your home or office, conducted
                                    seamlessly by our team of seasoned phlebotomists.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="800">
                            <div class="work-box bg-pink">
                                <div class="work-icon">
                                    <img src="{{ asset('frontend/assets/img/icons/prescriptions.svg') }}"
                                        alt="report-download">
                                </div>
                                <h4>4. Report and Support</h4>
                                <p>Experience the industry-first Smart Report, enriched with historical trends and AI-based
                                    evaluations. This innovative approach to health reporting comes with complimentary
                                    consultations for report discussions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="booking-lab-test-sec">
        <div class="section-bg">
            <img src="{{ asset('frontend/assets/img/icons/book-lab-bg-01.svg') }}" class="best-pack-bg-one"
                alt="Img">
            <img src="{{ asset('frontend/assets/img/icons/book-lab-bg-02.svg') }}" class="best-pack-bg-two"
                alt="Img">
        </div>
        <div class="container">
            <div class="row radius-inner">
                <div class="section-head-twelve">
                    <h2>Health Scans & Imaging Test</h2>
                    <p> Uncover the Seamless Process for Easy Navigation and Health Solutions.</p>
                </div>
                <div class="col-md-12">
                    <div class="booking-lab-test-slider owl-carousel">
                        <div class="booking-lab-grid" data-aos="fade-up" data-aos-delay="500">
                            <div class="booking-lab-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/blog/book-lab-01.jpg') }}"
                                        class="img-fluid" alt="Img"></a>
                            </div>
                            <div class="booking-lab-content">
                                <ul class="feature-badge">
                                    <li>Includes 50 Parameters</li>
                                    <li>Includes 20 tests </li>
                                </ul>
                                <h4><a href="#">Pregnancy Test</a></h4>
                                <p>Confidential Pregnancy Testing, Accurate and Timely Results for Your Peace of Mind</p>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1299 <span>₹1499</span></h5>
                                    </div>
                                    <div class="package-btn">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-lab-grid" data-aos="fade-up" data-aos-delay="600">
                            <div class="booking-lab-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/blog/book-lab-02.jpg') }}"
                                        class="img-fluid" alt="Img"></a>
                            </div>
                            <div class="booking-lab-content">
                                <ul class="feature-badge">
                                    <li>Includes 90 Parameters</li>
                                    <li>Includes 20 tests </li>
                                </ul>
                                <h4><a href="#">Thyroid</a></h4>
                                <p>Confidential Pregnancy Testing, Accurate and Timely Results for Your Peace of Mind</p>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1299 <span>₹1499</span></h5>
                                    </div>
                                    <div class="package-btn">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-lab-grid" data-aos="fade-up" data-aos-delay="700">
                            <div class="booking-lab-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/blog/book-lab-03.jpg') }}"
                                        class="img-fluid" alt="Img"></a>
                            </div>
                            <div class="booking-lab-content">
                                <ul class="feature-badge">
                                    <li>Includes 50 Parameters</li>
                                    <li>Includes 20 tests </li>
                                </ul>
                                <h4><a href="#">Diabetes Test</a></h4>
                                <p>Confidential Pregnancy Testing, Accurate and Timely Results for Your Peace of Mind</p>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1299 <span>₹1499</span></h5>
                                    </div>
                                    <div class="package-btn">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="booking-lab-grid" data-aos="fade-up" data-aos-delay="800">
                            <div class="booking-lab-img">
                                <a href="#"><img src="{{ asset('frontend/assets/img/blog/book-lab-02.jpg') }}"
                                        class="img-fluid" alt="Img"></a>
                            </div>
                            <div class="booking-lab-content">
                                <ul class="feature-badge">
                                    <li>Includes 50 Parameters</li>
                                    <li>Includes 20 tests </li>
                                </ul>
                                <h4><a href="#">Thyroid</a></h4>
                                <p>Confidential Pregnancy Testing, Accurate and Timely Results for Your Peace of Mind</p>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1299 <span>₹1499</span></h5>
                                    </div>
                                    <div class="package-btn">
                                        <a href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="populr-choice-sec">
        <div class="container">
            <div class="row radius-inner">
                <div class="section-head-twelve" data-aos="fade-up" data-aos-delay="500">
                    <h2>Popular Choices</h2>
                    <p>Explore Our Top-Tier Packages for Your Personalized Wellness Experience</p>
                </div>
                <div class="choice-slider-main">

                    <div class="col-md-12">
                        <div class="popular-choice-slider owl-carousel">
                            <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="500">
                                <div class="choice-head">
                                    <h4><a href="javascript:void(0);">Advanced Renal Package</a></h4>
                                    <h6><span><img src="{{ asset('frontend/assets/img/icons/gem.svg') }}"
                                                alt="Img"></span>Booked 218 times</h6>
                                </div>
                                <ul class="feature-badge">
                                    <li>Includes 08 tests </li>
                                </ul>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1200 <span>₹1500</span></h5>
                                    </div>
                                    <div class="offer-price">
                                        <span>30% OFF</span>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="600">
                                <div class="choice-head">
                                    <h4><a href="javascript:void(0);">Vitamin D & B12 Combo</a></h4>
                                    <h6><span><img src="{{ asset('frontend/assets/img/icons/gem.svg') }}"
                                                alt="Img"></span>Booked 585 times</h6>
                                </div>
                                <ul class="feature-badge">
                                    <li>Includes 10 tests </li>
                                </ul>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1200 <span>₹1500</span></h5>
                                    </div>
                                    <div class="offer-price">
                                        <span>30% OFF</span>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="700">
                                <div class="choice-head">
                                    <h4><a href="javascript:void(0);">Cancer Screening - Male</a></h4>
                                    <h6><span><img src="{{ asset('frontend/assets/img/icons/gem.svg') }}"
                                                alt="Img"></span>Booked 358 times</h6>
                                </div>
                                <ul class="feature-badge">
                                    <li>Includes 10 tests </li>
                                </ul>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1200 <span>₹1500</span></h5>
                                    </div>
                                    <div class="offer-price">
                                        <span>20% OFF</span>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="800">
                                <div class="choice-head">
                                    <h4><a href="javascript:void(0);">Winter Care Health Ch...</a></h4>
                                    <h6><span><img src="{{ asset('frontend/assets/img/icons/gem.svg') }}"
                                                alt="Img"></span>Booked 268 times</h6>
                                </div>
                                <ul class="feature-badge">
                                    <li>Includes 10 tests </li>
                                </ul>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1200 <span>₹1500</span></h5>
                                    </div>
                                    <div class="offer-price">
                                        <span>40% OFF</span>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="900">
                                <div class="choice-head">
                                    <h4><a href="javascript:void(0);">Advanced Renal Package</a></h4>
                                    <h6><span><img src="{{ asset('frontend/assets/img/icons/gem.svg') }}"
                                                alt="Img"></span>Booked 268 times</h6>
                                </div>
                                <ul class="feature-badge">
                                    <li>Includes 08 tests </li>
                                </ul>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1200 <span>₹1500</span></h5>
                                    </div>
                                    <div class="offer-price">
                                        <span>60% OFF</span>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-choice-card" data-aos="fade-up" data-aos-delay="1000">
                                <div class="choice-head">
                                    <h4><a href="javascript:void(0);">Vitamin D & B12 Combo</a></h4>
                                    <h6><span><img src="{{ asset('frontend/assets/img/icons/gem.svg') }}"
                                                alt="Img"></span>Booked 485 times</h6>
                                </div>
                                <ul class="feature-badge">
                                    <li>Includes 15 tests </li>
                                </ul>
                                <div class="package-footer d-flex justify-content-between align-items-center">
                                    <div class="package-cost">
                                        <h5>₹1200 <span>₹1500</span></h5>
                                    </div>
                                    <div class="offer-price">
                                        <span>30% OFF</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="book-lab-phno">
                    <span>Want to Book a Lab Visit, <a href="#"> Call – +91-9451471446</a></span>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-sec-twelve">
        <div class="container">
            <div class="row radius-inner">
                <div class="section-head-twelve">
                    <h2>Frequently Asked Qusetions </h2>
                    <p>Know the Questions from our Customers</p>
                </div>

                <ul class="nav nav-pills inner-tab" id="pills-tab2" role="tablist" data-aos="fade-up"
                    data-aos-delay="500">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-all" type="button" role="tab" aria-controls="pills-all"
                            aria-selected="false">All Packages</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="test-booking-tab" data-bs-toggle="pill"
                            data-bs-target="#test-booking" type="button" role="tab"
                            aria-controls="test-booking" aria-selected="true">Test Booking</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-adult-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-adult" type="button" role="tab" aria-controls="pills-adult"
                            aria-selected="false">Adult Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-accident-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-accident" type="button" role="tab"
                            aria-controls="pills-accident" aria-selected="false">Accident Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-fitness-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-fitness" type="button" role="tab"
                            aria-controls="pills-fitness" aria-selected="false">Fitness Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-explore-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-explore" type="button" role="tab"
                            aria-controls="pills-explore" aria-selected="false">Explore More</button>
                    </li>
                </ul>

                <div class="tab-content pt-0 dashboard-tab">

                    <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                        aria-labelledby="pills-all-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="faq-info faq-inner-info">
                                    <div class="accordion" id="faq-details">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <a href="javascript:void(0)" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit?
                                                </a>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#faq-details">
                                                <div class="accordion-body">
                                                    <div class="accordion-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <a href="javascript:void(0)" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Sed ut perspiciatis unde omnis iste natus error sit?
                                                </a>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#faq-details">
                                                <div class="accordion-body">
                                                    <div class="accordion-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <a href="javascript:void(0)" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Ut enim ad minim veniam, quis nostrud exercitation?
                                                </a>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#faq-details">
                                                <div class="accordion-body">
                                                    <div class="accordion-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <a href="javascript:void(0)" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Duis aute irure dolor in reprehenderit in voluptate velit?
                                                </a>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#faq-details">
                                                <div class="accordion-body">
                                                    <div class="accordion-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <a href="javascript:void(0)" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Nemo enim ipsam voluptatem quia voluptas sit aut odit?
                                                </a>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#faq-details">
                                                <div class="accordion-body">
                                                    <div class="accordion-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="test-booking" role="tabpanel" aria-labelledby="test-booking-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="faq-info faq-inner-info">
                                    <div class="accordion" id="faq-details">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <a href="javascript:void(0)" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    Q. How can I find out information regarding a particular lab/center?
                                                </a>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#faq-details">
                                                <div class="accordion-body">
                                                    <div class="accordion-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <a href="javascript:void(0)" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Sed ut perspiciatis unde omnis iste natus error sit?
                                                </a>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#faq-details">
                                                <div class="accordion-body">
                                                    <div class="accordion-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <a href="javascript:void(0)" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Ut enim ad minim veniam, quis nostrud exercitation?
                                                </a>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#faq-details">
                                                <div class="accordion-body">
                                                    <div class="accordion-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <a href="javascript:void(0)" class="accordion-button collapsed"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Duis aute irure dolor in reprehenderit in voluptate velit?
                                                </a>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#faq-details">
                                                <div class="accordion-body">
                                                    <div class="accordion-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                            enim ad minim veniam, </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="pills-adult" role="tabpanel" aria-labelledby="pills-adult-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-accident" role="tabpanel"
                        aria-labelledby="pills-accident-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-fitness" role="tabpanel"
                        aria-labelledby="pills-fitness-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-explore" role="tabpanel"
                        aria-labelledby="pills-explore-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="best-package-slider owl-carousel">
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="500">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="600">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="700">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/sticker-icon.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-01.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Full Body Checkup</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="best-package-card" data-aos="fade-up" data-aos-delay="800">
                                        <div class="package-card-top">
                                            <div class="card-img-right">
                                                <img src="{{ asset('frontend/assets/img/icons/medal-icon.svg') }}"
                                                    class="medal-icon" alt="Img">
                                            </div>
                                            <div class="package-icon">
                                                <img src="{{ asset('frontend/assets/img/icons/package-icon-02.svg') }}"
                                                    alt="Img">
                                            </div>
                                            <h3><a href="#">Asthma Apply</a></h3>
                                            <p>A diabetic foot exam can help find problems that can lead to serious
                                                infection and ...</p>
                                            <ul class="feature-badge">
                                                <li>Includes 50 Parameters</li>
                                                <li>Includes 20 tests </li>
                                            </ul>
                                            <div class="package-footer d-flex justify-content-between align-items-center">
                                                <div class="package-cost">
                                                    <h5>₹899 <span>₹1299</span></h5>
                                                </div>
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-differ overlay-card" data-aos="fade-up"
                                            data-aos-delay="700">
                                            <h3><a href="#">Urine Analysis</a></h3>
                                            <p>Allergy testing can be useful at different stages of life, like discovering
                                                that a family member...</p>
                                            <ul class="features-list">
                                                <li><span><i class="fa-solid fa-check"></i></span>Upload Prescription</li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Complete Blood Count
                                                </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Series Blood Tests </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Hormone Shots </li>
                                                <li><span><i class="fa-solid fa-check"></i></span>Transactions Lists</li>
                                            </ul>
                                            <div class="package-footer">
                                                <div class="package-btn">
                                                    <a href="#">Book Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <section class="lab-test-section">
        <div class="container">
            <div class="row radius-inner">
                <div class="section-head-twelve">
                    <h2>Lab Test At Home</h2>
                </div>
                <div class="lab-test-links">
                    <p>
                        <a href="#">Bighapur</a>
                        <a href="#">Pahi Hardo</a>
                        <a href="#">Bighapur</a>
                        <a href="#">Bighapur</a>
                        <a href="#">Bighapur</a>
                        <a href="#">Bighapur</a>
                        <a href="#">Bighapur</a>
                        <a href="#">Bighapur</a>
                        <a href="#">Bighapur</a>
                        <a href="#">Bighapur</a>
                    </p>
                </div>


            </div>
        </div>
    </section>
    <section class="lab-test-section">
        <div class="container">
            <div class="row radius-inner">
                <div class="section-head-twelve">
                    <h2>Popular Tests</h2>
                </div>
                <div class="lab-test-links">
                    <p>
                        <a href="#">Pregnancy Test</a>
                        <a href="#">Fever Test</a>
                        <a href="#">CBC Test</a>
                        <a href="#">Anemia Test</a>
                        <a href="#">Diabetes Test</a>
                        <a href="#">Heart Test</a>
                        <a href="#">Kidney Test</a>
                        <a href="#">Liver Test</a>
                        <a href="#">Cholesterol Test</a>
                        <a href="#">HbA1c Test</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
