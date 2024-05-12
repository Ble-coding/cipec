
@extends('layouts.master')

@section('title', __('seo.title'))
@section('subtile', __('seo.subtitleContact'))

@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="shape1 rotate-me"><img src="assets/img/shape/page-header-shape1.png" alt=""></div>
    <div class="shape2 float-bob-x"><img src="assets/img/shape/page-header-shape2.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ __('contact.page_title') }}</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{ route('home.index') }}"><span class="fa fa-home"></span> {{ __('contact.home') }}</a></li>
                <li><i class="icon-right-arrow-angle"></i></li>
                <li class="color-base">{{ __('contact.contact') }}</li>
            </ul>
        </div>
        

        <div class="right d-none d-md-block">
            <div class="banner-custom wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/img/slider/banner_contact.jpg" alt="banner">
            </div>
            <div class="banner-one__img-bg"></div>
        </div>
        
    </div>
</section>
<!--End Page Header-->

@include('contact.index')

@endsection
