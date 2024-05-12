<!--Start Accueil One-->
<section id="accueil_cipec" class="mt-3 testimonials-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow animated fadeInLeft" data-wow-delay="0.1s">
                <div class="testimonials-one__img-box">
                    <img src="assets/img/testimonial/testimonials-one__img1.jpg" alt="#">
                </div>
            </div>

            <div class="col-xl-6">
                <div class="testimonials-one__content-box">
                    <div class="testimonials-one__content-box">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h4>{{ __('home.says.title') }}</h4>
                            </div>
                            <h2>{{ __('home.says.subtitle') }}</h2>
                        </div>
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
                            "autoplay": { "delay": 6000 },
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
                                <!-- Slide 1 -->
                                <div class="swiper-slide">
                                    <div class="text-box">
                                        <p>{{ __('home.says.slides.slide1') }}</p>
                                    </div>      
                                </div>
                            
                                <!-- Slide 2 -->
                                <div class="swiper-slide">
                                    <div class="text-box">
                                        <p>{{ __('home.says.slides.slide2') }}</p>
                                    </div>
                                </div>
                            
                                <!-- Slide 3 -->
                                <div class="swiper-slide">
                                    <div class="text-box">
                                        <p>{{ __('home.says.slides.slide3') }}</p>
                                    </div>
                                </div>
                            
                                <!-- Slide 4 -->
                                <div class="swiper-slide">
                                    <div class="text-box">
                                        <p>{{ __('home.says.slides.slide4') }}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="author-box">
                                <h3>{{ __('home.says.title') }}</h3>
                                <p>{{ __('home.says.subtitle') }}</p>
                            </div>
                            
                            <!-- If we need navigation buttons -->
                            <div class="swiper-nav-style2 testimonials-one__swiper-nav-style2">
                                <div class="swiper-button-prev" id="testimonial-one__swiper-button-prev">
                                    <i class="icon-left-arrow"></i>
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
</section>
<!--End Accueil One-->