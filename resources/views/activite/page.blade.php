@extends('layouts.master')

@section('title', __('seo.title'))
@section('subtile', __('seo.subtitleActivities'))


@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="shape1 rotate-me"><img src="assets/img/shape/page-header-shape1.png" alt=""></div>
    <div class="shape2 float-bob-x"><img src="assets/img/shape/page-header-shape2.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ __('activities.title') }}</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{ route('home.index') }}"><span class="fa fa-home"></span> {{ __('activities.breadcrumb_home') }}</a></li>
                <li><i class="icon-right-arrow-angle"></i></li>
                <li class="color-base"> {{ __('activities.breadcrumb_activities') }}</li>
            </ul>  
        </div>        

        <div class="right d-none d-md-block">
            <div class="banner-custom wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/img/slider/banner_activites.jpg" alt="banner">
            </div>
            <div class="banner-one__img-bg"></div>
        </div>
        
    </div>
</section>
<!--End Page Header-->





<!--Start ACTIVITIES Process One-->
     
    <section class="service-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-details__content">
                        <div class="service-details__img-box1">
                            <div class="img-box">
                                <img src="assets/img/service/service-details__img3.jpg" alt="image">
                            </div>
                            <div class="content-box">
                                <h2>{{ __('activities.title') }}</h2>

                                <div class="service-details__text">
                                    <div class="title">
                                        <h3>{{ __('activities.economic_watch_canada') }}</h3>
                                        <ul class="list-item clearfix">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.economic_watch_canada_1') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.economic_watch_canada_2') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.economic_watch_canada_3') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.economic_watch_canada_4') }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    

                                    <div class="title">
                                        <h3>{{ __('activities.commercial_promotion_canada') }}</h3>
                                        <ul class="list-item clearfix">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.commercial_promotion_canada_1') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.commercial_promotion_canada_2') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.commercial_promotion_canada_3') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.commercial_promotion_canada_4') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.commercial_promotion_canada_5') }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="title">
                                        <h3>{{ __('activities.investment_promotion_canada') }}</h3>
                                        <ul class="list-item clearfix">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.investment_promotion_canada_1') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.investment_promotion_canada_2') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.investment_promotion_canada_3') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.investment_promotion_canada_4') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.investment_promotion_canada_5') }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    
                                    <div class="title">
                                        <h3>{{ __('activities.tourism_promotion_canada') }}</h3>
                                        <ul class="list-item clearfix">
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.tourism_promotion_canada_1') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.tourism_promotion_canada_2') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.tourism_promotion_canada_3') }}</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <span class="icon-check"></span>
                                                </div>
                                                <div class="text">
                                                    <p>{{ __('activities.tourism_promotion_canada_4') }}</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                         
                                
                                
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
  

<!--End ACTIVITIES Process One-->



@endsection
