@extends('layouts.master')

@section('title', __('seo.title'))
@section('subtile', __('seo.subtitleHome'))

@section('content')

    <!--Start Banner One-->
    <section class="banner-one">
        <div class="banner-one__shape1 float-bob-x">
            <img src="assets/img/shape/banner-one__shape1.png" alt="#">
        </div>
        <div class="banner-one__shape2 rotate-me">
            <img src="assets/img/shape/banner-one__shape2.png" alt="#">
        </div>
        <div class="banner-one__shape3 float-bob-y">
            <img src="assets/img/shape/banner-one__shape3.png" alt="#">
        </div>
        <div class="container">
            <div class="banner-one__inner">
                <div class="banner-one__content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="sub-title">
                        <h5>{!! nl2br(__('home.slider.chambre_ivoirienne_promotion_economique_canada')) !!}</h5>
                    </div>                    
                    <div class="big-title">
                        <h3>{{ __('home.slider.bienvenue_chez') }} <span style="color: #ef7b10">{{ __('home.slider.cipec') }}</span></h3>
                    </div>
                    <div class="text">
                        <p>{!! nl2br(__('home.slider.objectif_cote_ivoire')) !!}</p>
                    </div>
                    <div class="btn-box">
                        <a class="thm-btn" href="{{ route('presentations.index') }}">
                            <span class="txt">
                                {{ __('home.slider.decouvrir_cipec') }}
                                <i class="icon-next"></i>
                            </span>
                        </a>
                    </div>
                </div>
    
                <div class="banner-one__img wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner">
                        <img src="assets/img/slider/banner_accueil.jpg" alt="banner">
                    </div>
                    <div class="banner-one__img-bg"></div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner One-->


    <!--Start Mission One-->
    <section class="service-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>{{ __('home.mission.title') }}</h4>
                </div>
                <h2>{{ __('home.mission.subtitle') }}</h2>
            </div>
            <div class="row">
                <!--Start Single Service One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="service-one__single">
                        <div class="service-one__single-icon-box">
                            <span class="icon-app-development"></span>
                        </div>
                        <div class="service-one__single-content">
                            <div class="title-box">
                                <h3><a href="{{ route('presentations.index') }}">{{ __('home.mission.services.development.title') }}</a></h3>
                            </div>
                            <div class="list-item">
                                <ul>
                                    @foreach(__('home.mission.services.development.items') as $item)
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ $item }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service One-->
            
                <!--Start Single Service One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="service-one__single">
                        <div class="service-one__single-icon-box">
                            <span class="icon-web-development"><span class="path1"></span><span class="path2"></span></span>
                        </div>
                        <div class="service-one__single-content">
                            <div class="title-box">
                                <h3><a href="{{ route('presentations.index') }}">{{ __('home.mission.services.sharing.title') }}</a></h3>
                            </div>
                            <div class="list-item">
                                <ul>
                                    @foreach(__('home.mission.services.sharing.items') as $item)
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ $item }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service One-->
            
                <!--Start Single Service One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="service-one__single">
                        <div class="service-one__single-icon-box">
                            <span class="icon-plugin-development"></span>
                        </div>
                        <div class="service-one__single-content">
                            <div class="title-box">
                                <h3><a href="{{ route('presentations.index') }}">{{ __('home.mission.services.investment.title') }}</a></h3>
                            </div>
                            <div class="list-item">
                                <ul>
                                    @foreach(__('home.mission.services.investment.items') as $item)
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ $item }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service One-->
            
                <!--Start Single Service One-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="service-one__single">
                        <div class="service-one__single-icon-box">
                            <span class="icon-user"></span>
                        </div>
                        <div class="service-one__single-content">
                            <div class="title-box">
                                <h3><a href="{{ route('presentations.index') }}">{{ __('home.mission.services.identity_protection.title') }}</a></h3>
                            </div>
                            <div class="list-item">
                                <ul>
                                    @foreach(__('home.mission.services.identity_protection.items') as $item)
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ $item }}</p>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Service One-->
            
            </div>
            
        </div>
    </section>
    <!--End Mission One-->


    @include('accueil.index')

    <!--Start About One-->
    @include('presentation.index')
    <!--End About One-->

    <!--Start Fact Counter One-->
    {{-- <section class="fact-counter-one">
        <div class="container">
            <div class="row">
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-counter wow fadeInUp" data-wow-delay=".1s">
                        <div class="single-fact-counter-inner">
                            <div class="single-fact-counter-icon">
                                <span class="icon-completed-projects"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></span>
                            </div>
                            <div class="outer-box">
                                <div class="count-outer count-box">
                                    <h2 class="odometer" data-count="484">00</h2>
                                    <i class="icon-plus-symbol-button"></i>
                                </div>
                                <div class="title">
                                    <p>Completed Projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-counter wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-fact-counter-inner">
                            <div class="single-fact-counter-icon">
                                <span class="icon-happy-clients"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></span>
                            </div>
                            <div class="outer-box">
                                <div class="count-outer count-box">
                                    <h2 class="odometer" data-count="209">00</h2>
                                    <i class="icon-plus-symbol-button"></i>
                                </div>
                                <div class="title">
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-counter wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-fact-counter-inner">
                            <div class="single-fact-counter-icon">
                                <span class="icon-winning-award"></span>
                            </div>
                            <div class="outer-box">
                                <div class="count-outer count-box">
                                    <h2 class="odometer" data-count="123">00</h2>
                                    <i class="icon-plus-symbol-button"></i>
                                </div>
                                <div class="title">
                                    <p>Winning Award</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->
                <!--Start Single Fact Counter-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="single-fact-counter wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-fact-counter-inner">
                            <div class="single-fact-counter-icon">
                                <span class="icon-cup-teas"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span></span>
                            </div>
                            <div class="outer-box">
                                <div class="count-outer count-box">
                                    <h2 class="odometer" data-count="245">00</h2>
                                    <i class="icon-plus-symbol-button"></i>
                                </div>
                                <div class="title">
                                    <p>Cup of Teas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Fact Counter-->

            </div>
        </div>
    </section> --}}
    <!--End Fact Counter One-->

    <!--Start Project One-->
    @include('project.index')
    <!--End Project One-->

    <!--Start Skills One-->
    {{-- <section class="skills-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>My Resume</h4>
                </div>
                <h2>Education & Experiences</h2>
            </div>
            <div class="row">
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInLeft" data-wow-delay="0.1s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-1.png" alt="#">
                                </div>
                                <div class="skills-one__single-title">
                                    <h3>Defodrill University</h3>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="#"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <p>November 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInRight" data-wow-delay="0.1s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-2.png" alt="#">
                                </div>
                                <div class="skills-one__single-title">
                                    <h3>Microsoft</h3>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="#"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <p>November 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInLeft" data-wow-delay="0.2s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-3.png" alt="#">
                                </div>
                                <div class="skills-one__single-title">
                                    <h3>Rajshahi Polytechnic</h3>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="#"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <p>November 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInRight" data-wow-delay="0.2s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-4.png" alt="#">
                                </div>
                                <div class="skills-one__single-title">
                                    <h3>Apple</h3>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="#"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <p>November 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInLeft" data-wow-delay="0.3s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-5.png" alt="#">
                                </div>
                                <div class="skills-one__single-title">
                                    <h3>Rajshahi School</h3>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="#"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <p>November 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
                <!--Start Single Skills One-->
                <div class="col-xl-6 col-lg-6 wow animated fadeInRight" data-wow-delay="0.1s">
                    <div class="skills-one__single">
                        <div class="skills-one__single-inner">
                            <div class="skills-one__single-left-box">
                                <div class="skills-one__single-icon">
                                    <img src="assets/img/icon/skills/skills1-6.png" alt="#">
                                </div>
                                <div class="skills-one__single-title">
                                    <h3>Google</h3>
                                    <p>Senior Web Developer</p>
                                </div>
                            </div>
                            <div class="skills-one__single-right-box">
                                <div class="skills-one__single-btn-box">
                                    <a href="#"><span class="icon-up-right-arrow"></span></a>
                                </div>
                                <div class="skills-one__single-date-box">
                                    <p>November 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Skills One-->
            </div>
        </div>
    </section> --}}
    <!--End Skills One-->

    
    <!--Start Testimonials One-->
    {{-- <section class="testimonials-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow animated fadeInLeft" data-wow-delay="0.1s">
                    <div class="testimonials-one__img-box">
                        <img src="assets/img/testimonial/testimonials-one__img1.jpg" alt="#">
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="testimonials-one__content-box">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h4>Testimonial</h4>
                            </div>
                            <h2>See The Success Stories<br>from My Clients</h2>
                        </div>

                        <div class="testimonials-one__inner">
                            <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                                "loop": true,
                                "pagination": {
                                    "el": "#testimonial-one-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                    },
                                "navigation": {
                                    "nextEl": "#testimonial-one__swiper-button-next",
                                    "prevEl": "#testimonial-one__swiper-button-prev"
                                },
                                "autoplay": { "delay": 5000 },
                                "breakpoints": {
                                    "0": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "375": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "575": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "768": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "992": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    },
                                    "1200": {
                                        "spaceBetween": 30,
                                        "slidesPerView": 1
                                    }
                                }}'>

                                <div class="swiper-wrapper">

                                    <!--Start Single Swiper Slide -->
                                    <div class="swiper-slide">
                                        <div class="text-box">
                                            <p>
                                                “Regulatory requirements, long processes, outdated software, and
                                                endless suppliers still create a lot of complexity in the midle
                                                industry today. Our mission is to make of the
                                                travel effortless.”
                                            </p>
                                        </div>
                                        <div class="athour-box">
                                            <h3>Alina Kolaminov</h3>
                                            <p>Marketing Agent</p>
                                        </div>
                                    </div>
                                    <!--End Single Swiper Slide -->
                                    <!--Start Single Swiper Slide -->
                                    <div class="swiper-slide">
                                        <div class="text-box">
                                            <p>
                                                “Regulatory requirements, long processes, outdated software, and
                                                endless suppliers still create a lot of complexity in the midle
                                                industry today. Our mission is to make of the
                                                travel effortless.”
                                            </p>
                                        </div>
                                        <div class="athour-box">
                                            <h3>Alina Kolaminov</h3>
                                            <p>Marketing Agent</p>
                                        </div>
                                    </div>
                                    <!--End Single Swiper Slide -->
                                    <!--Start Single Swiper Slide -->
                                    <div class="swiper-slide">
                                        <div class="text-box">
                                            <p>
                                                “Regulatory requirements, long processes, outdated software, and
                                                endless suppliers still create a lot of complexity in the midle
                                                industry today. Our mission is to make of the
                                                travel effortless.”
                                            </p>
                                        </div>
                                        <div class="athour-box">
                                            <h3>Alina Kolaminov</h3>
                                            <p>Marketing Agent</p>
                                        </div>
                                    </div>
                                    <!--End Single Swiper Slide -->


                                    <!--Start Single Swiper Slide -->
                                    <div class="swiper-slide">
                                        <div class="text-box">
                                            <p>
                                                “Regulatory requirements, long processes, outdated software, and
                                                endless suppliers still create a lot of complexity in the midle
                                                industry today. Our mission is to make of the
                                                travel effortless.”
                                            </p>
                                        </div>
                                        <div class="athour-box">
                                            <h3>Alina Kolaminov</h3>
                                            <p>Marketing Agent</p>
                                        </div>
                                    </div>
                                    <!--End Single Swiper Slide -->
                                    <!--Start Single Swiper Slide -->
                                    <div class="swiper-slide">
                                        <div class="text-box">
                                            <p>
                                                “Regulatory requirements, long processes, outdated software, and
                                                endless suppliers still create a lot of complexity in the midle
                                                industry today. Our mission is to make of the
                                                travel effortless.”
                                            </p>
                                        </div>
                                        <div class="athour-box">
                                            <h3>Alina Kolaminov</h3>
                                            <p>Marketing Agent</p>
                                        </div>
                                    </div>
                                    <!--End Single Swiper Slide -->
                                    <!--Start Single Swiper Slide -->
                                    <div class="swiper-slide">
                                        <div class="text-box">
                                            <p>
                                                “Regulatory requirements, long processes, outdated software, and
                                                endless suppliers still create a lot of complexity in the midle
                                                industry today. Our mission is to make of the
                                                travel effortless.”
                                            </p>
                                        </div>
                                        <div class="athour-box">
                                            <h3>Alina Kolaminov</h3>
                                            <p>Marketing Agent</p>
                                        </div>
                                    </div>
                                    <!--End Single Swiper Slide -->
                                </div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-nav-style2 testimonials-one__swiper-nav-style2">
                                    <div class="swiper-button-prev" id="testimonial-one__swiper-button-prev">
                                        <i class="icon-left-arrow right"></i>
                                    </div>
                                    <div class="swiper-button-next" id="testimonial-one__swiper-button-next">
                                        <i class="icon-right-arrow-angle left"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Testimonials One-->

    <!--Start Partner style1-->
    {{-- <section class="partner-style1">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>Parténaires</h4>
                </div>
                <h2>Parténaires de la CIPEC</h2>
            </div>
            <div class="row">
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#">
                            <img src="assets/img/brand/brand-v1-1.png" alt="#">
                            <img class="" src="assets/img/brand/brand-v1-1-overlay.png" alt="#">
                        </a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#">
                            <img src="assets/img/brand/brand-v1-2.png" alt="#">
                            <img class="" src="assets/img/brand/brand-v1-2-overlay.png" alt="#">
                        </a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#">
                            <img src="assets/img/brand/brand-v1-3.png" alt="#">
                            <img class="" src="assets/img/brand/brand-v1-3-overlay.png" alt="#">
                        </a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#">
                            <img src="assets/img/brand/brand-v1-4.png" alt="#">
                            <img class="" src="assets/img/brand/brand-v1-4-overlay.png" alt="#">
                        </a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#">
                            <img src="assets/img/brand/brand-v1-5.png" alt="#">
                            <img class="" src="assets/img/brand/brand-v1-5-overlay.png" alt="#">
                        </a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#">
                            <img src="assets/img/brand/brand-v1-6.png" alt="#">
                            <img class="" src="assets/img/brand/brand-v1-6-overlay.png" alt="#">
                        </a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#">
                            <img src="assets/img/brand/brand-v1-7.png" alt="#">
                            <img class="" src="assets/img/brand/brand-v1-7-overlay.png" alt="#">
                        </a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
                <!--Start Single Partner Logo Box-->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-partner-logo-box">
                        <a href="#">
                            <img src="assets/img/brand/brand-v1-8.png" alt="#">
                            <img class="" src="assets/img/brand/brand-v1-8-overlay.png" alt="#">
                        </a>
                    </div>
                </div>
                <!--End Single Partner Logo Box-->
            </div>
        </div>
    </section> --}}
    <!--End Partner style1-->

    <!--Start Blog One-->
    {{-- <section class="blog-one">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h4>Blog & News</h4>
                </div>
                <h2>Read Our Latest Blog</h2>
            </div>
            <div class="row">
                <!--Start Single Blog One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img-box">
                            <img src="assets/img/blog/blog-one-1.jpg" alt="#">
                        </div>
                        <div class="blog-one__single-content">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>
                                        <div class="line"></div>
                                        <p><a href="#">Design</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <p><a href="#">Sep 30, 2022</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-one__single-content-meta-box-title-box">
                                <h3><a href="blog-details.html">Sharing You and Your Company<br>with The World</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog One-->
                <!--Start Single Blog One-->
                <div class="col-xl-4 col-lg-4 wow fadeInDown" data-wow-delay=".3s">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img-box">
                            <img src="assets/img/blog/blog-one-2.jpg" alt="#">
                        </div>
                        <div class="blog-one__single-content">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>
                                        <div class="line"></div>
                                        <p><a href="#">Development</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <p><a href="#">Sep 30, 2022</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-one__single-content-meta-box-title-box">
                                <h3><a href="blog-details.html">I Will Deliver The Digital Results<br>As You
                                        Desire</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog One-->
                <!--Start Single Blog One-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                    <div class="blog-one__single">
                        <div class="blog-one__single-img-box">
                            <img src="assets/img/blog/blog-one-3.jpg" alt="#">
                        </div>
                        <div class="blog-one__single-content">
                            <div class="meta-box">
                                <ul class="meta-info">
                                    <li>
                                        <div class="line"></div>
                                        <p><a href="#">Design</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <p><a href="#">Sep 30, 2022</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="blog-one__single-content-meta-box-title-box">
                                <h3><a href="blog-details.html">Will Reach Your Audience and<br>Convert Your
                                        Leads</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Blog One-->
            </div>
        </div>
    </section> --}}
    <!--End Blog One-->

    <!--Start Cta One-->
    <section class="cta-one">
        <div class="container">
            <div class="cta-one__inner text-center">
                <div class="cta-one__shape1 float-bob-y">
                    <img src="assets/img/shape/cta-one__shape1.png" alt="#">
                </div>
                <div class="cta-one__shape2 float-bob-y">
                    <img src="assets/img/shape/cta-one__shape2.png" alt="#">
                </div>
                <div class="cta-one__shape3 rotate-me">
                    <img src="assets/img/shape/cta-one__shape3.png" alt="#">
                </div>
                <div class="cta-one__shape4 float-bob-x">
                    <img src="assets/img/shape/cta-one__shape4.png" alt="#">
                </div>
                <div class="cta-one__shape5 float-bob-x">
                    <img src="assets/img/shape/cta-one__shape5.png" alt="#">
                </div>
                <div class="cta-one__shape6 float-bob-y">
                    <img src="assets/img/shape/cta-one__shape6.png" alt="#">
                </div>
                <div class="cta-one__inner-title-box">
                    <h2>{{ __('home.cta.title') }}</h2>
                </div>
                <div class="cta-one__inner-text-box">
                    <p>{{ __('home.cta.text') }}</p>
                </div>
                <div class="cta-one__inner-btn-box">
                    <a class="thm-btn" href="{{ route('contacts.index') }}">
                        <span class="txt">{{ __('home.cta.button') }}</span>
                        <i class="icon-next"></i>
                    </a>
                </div>
                
            </div>
        </div>
    </section>  
    <!--End Cta One-->


   


@endsection
