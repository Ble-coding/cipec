
@extends('layouts.master')

    @section('title', __('seo.title'))
    @section('subtile', __('seo.subtitleTeam'))

@section('content')

<!--Start Page Header--> 
<section class="page-header">
    <div class="shape1 rotate-me"><img src="assets/img/shape/page-header-shape1.png" alt=""></div>
    <div class="shape2 float-bob-x"><img src="assets/img/shape/page-header-shape2.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2>{{ __('team.title') }}</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{ route('home.index') }}"><span class="fa fa-home"></span> {{ __('team.breadcrumb_home') }}</a></li>
                <li><i class="icon-right-arrow-angle"></i></li>
                <li class="color-base">{{ __('team.breadcrumb_team') }}</li>
            </ul>
        </div>
        
        

        <div class="right d-none d-md-block">
            <div class="banner-custom wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/img/slider/banner_team.jpg" alt="banner">
            </div>
            <div class="banner-one__img-bg"></div>
        </div>
        
    </div>
</section>
<!--End Page Header-->


        <!--Start Team One-->
        <section class="team-one">
            <div class="container">
                <div class="row">

                  <!--Start Single Team One-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-one__single">
                        <div class="team-one__single-img">
                            <img src="assets/img/team/team-v1-3.jpg" alt="image">
                            {{-- <div class="social-share-box">
                                <span class="icon-plus"></span>
                                <ul class="clearfix">
                                    <li>
                                        <a href="www.facebook.com">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.twitter.com">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.linkedin.com">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="team-one__single-title">
                            <h3><a>{{ __('team.team_member3_name') }}</a></h3>
                            <p>{{ __('team.team_member3_position') }}</p>
                        </div>
                    </div>
                </div>
                <!--End Single Team One-->
              
                <!--Start Single Team One-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInDown" data-wow-delay=".3s">
                    <div class="team-one__single">
                        <div class="team-one__single-img">
                            <img src="assets/img/team/team-v1-2.jpg" alt="image">
                            {{-- <div class="social-share-box">
                                <span class="icon-plus"></span>
                                <ul class="clearfix">
                                    <li>
                                        <a href="www.facebook.com">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.twitter.com">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.linkedin.com">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="team-one__single-title">
                            <h3><a>{{ __('team.team_member2_name') }}</a></h3>
                            <p>{{ __('team.team_member2_position') }}</p>
                        </div>
                    </div>
                </div>
                <!--End Single Team One-->
              
                <!--Start Single Team One-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-one__single">
                        <div class="team-one__single-img">
                            <img src="assets/img/team/team-v1-1.jpg" alt="image">
                            {{-- <div class="social-share-box">
                                <span class="icon-plus"></span>
                                <ul class="clearfix">
                                    <li>
                                        <a href="www.facebook.com">
                                            <i class="icon-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.twitter.com">
                                            <i class="icon-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="www.linkedin.com">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="team-one__single-title">
                            <h3><a>{{ __('team.team_member1_name') }}</a></h3>
                            <p>{{ __('team.team_member1_position') }}</p>
                        </div>
                    </div>
                </div>
                <!--End Single Team One-->


                </div>
            </div>
        </section>
        <!--End Team One-->

@endsection
