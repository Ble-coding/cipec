@extends('layouts.master')

@section('title', __('seo.title'))
@section('subtile', __('seo.subtitlePresentation'))

@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="shape1 rotate-me"><img src="assets/img/shape/page-header-shape1.png" alt=""></div>
    <div class="shape2 float-bob-x"><img src="assets/img/shape/page-header-shape2.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ __('presentation.page_title') }}</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{ route('home.index') }}"><span class="fa fa-home"></span>{{ __('presentation.breadcrumb.home') }}</a></li>
                <li><i class="icon-right-arrow-angle"></i></li>
                <li class="color-base">{{ __('presentation.breadcrumb.presentation') }}</li>
            </ul>
        </div>
        
        <div class="right d-none d-md-block">
            <div class="banner-custom wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/img/slider/banner_present.jpg" alt="banner">
            </div>
            <div class="banner-one__img-bg"></div>
        </div>
        
    </div>
</section>
<!--End Page Header-->

<!--Start Presentation Three-->
<section class="service-three">
    <div class="service-three__shape1 float-bob-x">
        <img src="assets/img/shape/service-three__shape1.png" alt="shapes">
    </div>
    <div class="service-three__shape2">
        <img src="assets/img/shape/service-three__shape2.png" alt="shapes">
    </div>
    <div class="service-three__shape3 float-bob-y">
        <img src="assets/img/shape/service-three__shape3.png" alt="shapes">
    </div>
 <div class="container">
    <div class="sec-title-three text-center">
        <div class="sub-title">
            <h4>{{ __('presentation.title') }}</h4>
        </div>
        <h2>
            {{ __('presentation.subtitle') }}
        </h2>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="service-three__single">
                <div class="service-three__single-content">
                    <div class="text">
                        <p>{{ __('presentation.paragraph1') }}</p>
                        <p>{{ __('presentation.paragraph2') }}</p>
                        <p>{{ __('presentation.paragraph3') }}</p>
                        <p>{{ __('presentation.paragraph4') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>
<!--End Presentation Three-->




@endsection
