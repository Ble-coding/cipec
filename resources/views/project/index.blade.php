<section class="project-one">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h4>{{ __('home.projects.title') }}</h4>
            </div>
            <h2>{{ __('home.projects.subtitle') }}</h2>
        </div>
        
       <!-- Début d'un projet -->
        <div class="project-one__single wow animated fadeInLeft" data-wow-delay="0.1s">
            <div class="row">
                <div class="col-xl-7">
                    <div class="project-one__single-img-box">
                        <img src="assets/img/project/project-one-1.jpg" alt="#">
                        <div class="overlay-icon">
                            <a href="assets/img/project/project-one-1.jpg" class="img-popup">
                                <span class="icon-plus"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="project-one__single-content-box">
                        <div class="meta-box">
                            <ul class="meta-info">
                                <li>
                                    <div class="icon">
                                        <span class="icon-user"></span>
                                    </div>
                                    <p><a href="#">{{ __('home.projects.developed_by') }}</a></p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-calendar"></span>
                                    </div>
                                    <p><a href="#">{{ __('home.projects.coming_soon') }}</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="title-box">
                            <h2><a href="#">{{ __('home.projects.promotion_title') }}</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- Fin d'un projet -->


      <!-- Début d'un autre projet -->
        <div class="project-one__single wow animated fadeInRight" data-wow-delay="0.2s">
            <div class="row">
                <div class="col-xl-5 order-22">
                    <div class="project-one__single-content-box project-one__single-content-box--style2">
                        <div class="meta-box">
                            <ul class="meta-info">
                                <li>
                                    <div class="icon">
                                        <span class="icon-user"></span>
                                    </div>
                                    <p><a href="#">{{ __('home.projects.developed_by') }}</a></p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-calendar"></span>
                                    </div>
                                    <p><a href="#">{{ __('home.projects.coming_soon') }}</a></p>
                                </li>
                            </ul>
                        </div>
                        <div class="title-box">
                            <h2><a href="#">{{ __('home.projects.public_projects_title') }}</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 order-11">
                    <div class="project-one__single-img-box">
                        <img src="assets/img/project/project-one-2.jpg" alt="#">
                        <div class="overlay-icon">
                            <a href="assets/img/project/project-one-2.jpg" class="img-popup">
                                <span class="icon-plus"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- Fin d'un autre projet -->
        

    @if(Route::is('projets.index'))
       
    @else
           <div class="project-one__btn-box">
            <a class="thm-btn" href="{{ route('projets.index') }}">
                <span class="txt">{{ __('home.projects.view_all') }}</span>
                <i class="icon-next"></i>
            </a>
        </div>
    @endif

    </div>
</section>


  