    <!--Start Get In Touch One-->
    {{-- <section id="contact" class="get-in-touch-one"> --}}
    <section class="get-in-touch-one">
        <div class="container">
            <div class="row">
                <!--Start Get In Touch One Content-->
                <div class="col-xl-6 col-lg-6">
                    <div class="get-in-touch-one__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h4>{{ __('contact.get_in_touch.subtitle') }}</h4>
                            </div>
                            <h2>{{ __('contact.get_in_touch.title') }}</h2>
                        </div>
                        <ul class="get-in-touch-one__content-list-box">
                            <li>
                                <div class="icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <div class="text-box">
                                    <p>{{ __('contact.get_in_touch.address') }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-telephone"></span>
                                </div>
                                <div class="text-box">
                                    <p>
                                        <a href="tel:{{ __('contact.get_in_touch.phone_1') }}">{{ __('contact.get_in_touch.phone_1') }}</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-email"></span>
                                </div>
                                <div class="text-box">
                                    <p>
                                        <a href="mailto:{{ __('contact.get_in_touch.email') }}">{{ __('contact.get_in_touch.email') }}</a>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-website-design">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </span>
                                </div>
                                <div class="text-box">
                                    <p>
                                        <a href="{{ __('contact.get_in_touch.website') }}">{{ __('contact.get_in_touch.website') }}</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!--End Get In Touch One Content-->

                <!--Start Get In Touch One Form Box-->
                <div class="col-xl-6 col-lg-6">
                    <div class="get-in-touch-one__form">
                        @include('include.formContact')
                    </div>
                </div>                
                <!--End Get In Touch One Form Box-->
            </div>
        </div>
    </section>
    <!--End Get In Touch One-->