@extends('layouts.master')

@section('title', __('seo.title'))
@section('subtile', __('seo.subtitleRole'))

@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="shape1 rotate-me"><img src="assets/img/shape/page-header-shape1.png" alt=""></div>
    <div class="shape2 float-bob-x"><img src="assets/img/shape/page-header-shape2.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ __('role.title') }}</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{ route('home.index') }}"><span class="fa fa-home"></span> Accueil</a></li>
                <li><i class="icon-right-arrow-angle"></i></li>
                <li class="color-base">{{ __('role.title') }}</li>
            </ul>
            
        </div>

        <div class="right d-none d-md-block">
            <div class="banner-custom wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/img/slider/banner_role.jpg" alt="banner">
            </div>
            <div class="banner-one__img-bg"></div>
        </div>
        
    </div>
</section>
<!--End Page Header-->





<!--Start Mission Process One-->
     
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-details__content">
                        <div class="service-details__img-box1">
                            <div class="img-box">
                                <img src="assets/img/service/service-details__img4.jpg" alt="image">
                            </div>
                            <div class="content-box">
                                <h2>{{ __('role.mission_title') }}</h2>
                                <p>
                                    {{ __('role.mission_description') }} 
                                </p>
                                <p>
                                    {{ __('role.paragraph_p') }}   
                                </p>
                                <div class="service-details__text">
                                    <div class="title">
                                        <h3> {{ __('role.business_community_activities') }}   </h3>
                                        <p>
                                            {{ __('role.support_sme_exchange') }} 
                                        </p>
                                        <p>
                                            {{ __('role.organize_international_forums') }} 
                                        </p>
                                    </div>
                                    <div class="text">
                                        <p>
                                            {{ __('role.facilitate_foreign_contacts') }} 
                                        </p>
                                        <p>
                                            {{ __('role.promote_development_studies') }}  
                                        </p>
                                    </div>
                                </div>
                                <div class="title">
                                    <h3 class="mt-3">{{ __('role.activities_title') }}</h3>
                                </div>
                                <ul class="list-item clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('role.activity_1') }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('role.activity_2') }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('role.activity_3') }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('role.activity_4') }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('role.activity_5') }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('role.activity_6') }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('role.activity_7') }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('role.activity_8') }}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>{{ __('role.activity_9') }}</p>
                                        </div>
                                    </li>
                                </ul>     
                            </div>
                  
                        </div>
                    </div>
                </div>

                <!--Start Sidebar-->
                <div class="col-xl-4">
                    @include('help.index')
                </div>
                <!--End Sidebar-->

            </div>
        </div>
    </section>
  

<!--End Mission Process One-->



@endsection
