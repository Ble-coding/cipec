@extends('layouts.master')

@section('title', 'SITE OFFICIEL CIPEC')
@section('subtile', ' LIENS UTILES DE CIPEC')

@section('content')

<!--Start Page Header-->
<section class="page-header">
    <div class="shape1 rotate-me"><img src="assets/img/shape/page-header-shape1.png" alt=""></div>
    <div class="shape2 float-bob-x"><img src="assets/img/shape/page-header-shape2.png" alt=""></div>
    <div class="container">
        <div class="page-header__inner">
            <h2> Liens Utiles</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{ route('home.index') }}"><span class="fa fa-home"></span> Accueil</a></li>
                <li><i class="icon-right-arrow-angle"></i></li>
                <li class="color-base"> Liens</li>
            </ul>
        </div>

        <div class="right d-none d-md-block">
            <div class="banner-custom wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                <img src="assets/img/slider/banner-one__mian-img.jpg" alt="banner">
            </div>
            <div class="banner-one__img-bg"></div>
        </div>
        
    </div>
</section>
<!--End Page Header-->





<!--Start usefuls Links Process One-->
     

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
                            <h2>La Côte d’Ivoire</h2>
                            <p>
                                Ce menu consiste à présenter la côte d’Ivoire 
                                sous des différents aspects aux investisseurs potentiels 
                            </p>
                            <ul class="list-item clearfix">
                                <li>
                                    <div class="icon">
                                        <span >2.1</span>
                                    </div>
                                    <div class="text">
                                       <p><a href="http://civ.abidjan.net/connaitre">Présentation</a></p> 
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span >2.2</span>
                                    </div>
                                    <div class="text">
                                        <p><a href="http://civ.abidjan.net/histoire">Histoire</a></p>   
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span >2.3</span>
                                    </div>
                                    <div class="text">
                                        <p><a href="http://civ.abidjan.net/economie">Économie</a></p>   
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span >2.4</span>
                                    </div>
                                    <div class="text">
                                        <p><a href="http://civ.abidjan.net/geographie">Géographie</a></p>   
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span >2.5</span>
                                    </div>
                                    <div class="text">
                                        <p><a href="http://civ.abidjan.net/culture">Culture</a></p>   
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span >2.6</span>
                                    </div>
                                    <div class="text">
                                        <p><a href="http://civ.abidjan.net/societe">Société</a></p>   
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span >2.7</span>
                                    </div>
                                    <div class="text">
                                        <p><a href="http://civ.abidjan.net/institutions-et-valeurs">Institution</a></p>   
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span >2.8</span>
                                    </div>
                                    <div class="text">
                                        <p><a href="http://www.speciamerica.org/formalite.php">Formalité d’entrée en RCI</a></p>   
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- <div class="service-details__text">
                        <div class="title">
                            <h3>Start with A Plan and Finish with Results</h3>
                            <p>
                                The magic of marketing, the science of sales. Build your brand’s voice. Grow
                                your brand by zeroing in on your target market. Affordable, targeted media for
                                everyone.
                            </p>
                        </div>
                        <div class="text">
                            <p>
                                At vero eos et accusamus et iust odio dignissimos ducimus blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dol quamolestias excepturi sint
                                occaecati Lead generati inbound marketing, web development, and marketing
                                automation solutions.
                            </p>
                        </div>
                    </div>

                    <div class="service-details__img-box2">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="img-box">
                                    <img src="assets/img/service/service-details__img2.jpg" alt="image">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="content-box">
                                    <p>
                                        Applications are like the lifeblood mobile phones and tablets today. The
                                        true potential you mobile phone is harnessed applications that can
                                        provide
                                        utility. Apps come under of the various segments. Nowad technology has
                                        become super advanced even normal people are getting themselves.
                                    </p>
                                    <ul class="list-item clearfix">
                                        <li>
                                            <div class="circle-box"></div>
                                            <div class="text">
                                                <p>Our services will feel like mint of creativity.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="circle-box"></div>
                                            <div class="text">
                                                <p>We develop application excellent technology.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="circle-box"></div>
                                            <div class="text">
                                                <p>Practice for providing all application problems.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    
                </div>
            </div>

            <!--Start Sidebar-->
            <div class="col-xl-4">
                <div class="service-details__sidebar">
    

                    <!--Start Sidebar Single-->
                    {{-- <div class="sidebar__single sidebar__category wow fadeInUp" data-wow-delay=".3s">
                        <div class="title-box">
                            <h2>CIPEC aura a accomplir les activités suivantes</h2>
                        </div>

                        <ul class="sidebar__category-list">
                            <li>
                                <div class="cercale-box"></div>
                                <a >La conduite, la coordination et le suivi des activités économiques et commerciales
                                </a>
                            </li>
                            <li>
                                <div class="cercale-box"></div>
                                <a >La promotion des différents secteurs et produits de l'économie ivoirienne
                                </a>
                            </li>
                            <li>
                                <div class="cercale-box"></div>
                                <a href="#">La promotion des investissements directs canadiens en Côte d'Ivoire
                                </a>
                            </li>
                            <li>
                                <div class="cercale-box"></div>
                                <a >La recherche de financements auprès des milieux d'affaires canadiens
                                </a>
                            </li>
                            <li>
                                <div class="cercale-box"></div>
                                <a >La promotion des investisseurs et entrepreneurs ivoiriens résidants au Canada
                                </a>
                            </li>
                            <li>
                                <div class="cercale-box"></div>
                                <a >La sensibilisation de la diaspora canadienne à investir en Côte d'Ivoire
                                </a>
                            </li>
                            <li>
                                <div class="cercale-box"></div>
                                <a>La lutte contre la cybercriminalité
                                </a>
                            </li>
                            <li>
                                <div class="cercale-box"></div>
                                <a >La situation socio-économique et politique
                                </a>
                            </li>
                            <li>
                                <div class="cercale-box"></div>
                                <a>La vérification et la validation des informations douteuses
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                    <!--End Sidebar Single-->

                    

                   

                    <!--Start Sidebar Single-->
                    <div class="sidebar__contact-info wow fadeInUp" data-wow-delay=".5s">
                        <div class="sidebar__contact-info-bg"
                            style="background-image: url(assets/img/service/service-details-sideber__img1.jpg);">
                        </div>
                        <div class="content-box text-center">
                            <h3>Envie De Discuter<br>De Votre Projet ?</h3>
                            <div class="btn-box">
                                <a class="thm-btn" href="{{ route('contacts.index') }}">
                                    <span class="txt">Contactez-nous</span>
                                    <i class="icon-next"></i>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <!--End Sidebar Single-->

                </div>
            </div>
            <!--End Sidebar-->

        </div>
    </div>
</section>


<!--End usefuls Links Process One-->



@endsection
