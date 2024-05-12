<footer class="footer-one">
    <!-- Start Footer Main -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-one__img1 float-bob-x">
                <img src="assets/img/footer/footer-one-1.png" alt="#">
            </div>
            <div class="footer-one__img2 float-bob-y">
                <img src="assets/img/footer/footer-one-2.png" alt="#">
            </div>
            <div class="footer-main__inner text-center">
                <div class="footer-one__logo-box">
                    <a href="{{ route('home.index') }}"><img src="assets/img/logo/footer-one-1.png" alt="#"></a>
                </div>
      
                
                <div class="footer-one__big-title">
                    <h2>{{ __('footer.footer.title') }}</h2>
                </div>
                <div class="footer-one__text-box">
                    <p> {!! nl2br(__('footer.footer.text')) !!}</p>
                </div>
                
                <div class="footer-one__socel-link">
                    <ul class="clearfix">
                        <li>
                            <a href="https://web.facebook.com/cipeccanada?_rdc=1&_rdr" target="_blank">
                                <i class="icon-facebook"></i> 
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/cipeccanada" target="_blank">
                                <i class="icon-twitter"></i> 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Main -->

    <!--Start Footer Middle-->
    <div class="footer-middle">
        <div class="container">
            <div class="footer-middle__inner">
                <div class="copyright-menu">
                    <ul>
                        <li>
                            <p><a href="{{ route('presentations.index') }}">{{ __('footer.footer_links.presentation') }}</a></p>
                        </li>
                        <li>
                            <p><a href="{{ route('roles.index') }}">{{ __('footer.footer_links.role_mission') }}</a></p>
                        </li>
                        <li>
                            <p><a href="{{ route('projets.index') }}">{{ __('footer.footer_links.projects') }}</a></p>
                        </li>
                        <li>
                            <p><a href="{{ route('activites.index') }}">{{ __('footer.footer_links.activities') }}</a></p>
                        </li>
                        <li>
                            <p><a href="{{ route('teams.index') }}">{{ __('footer.footer_links.our_team') }}</a></p>
                        </li>
                    </ul>
                </div>
                <div class="footer-middle__mail-box">
                    <div class="icon">
                        <span class="icon-mail-inbox-app"></span>
                    </div>
                    <div class="text">
                        <p><a href="mailto:{{ __('footer.footer_links.email') }}">{{ __('footer.footer_links.email') }}</a></p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!--End Footer Middle-->

    <!--Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__inner">
                <div class="copyright-text text-center">
                    <p>{!! __('footer.copyright_text', ['year' => date('Y')]) !!}</p>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer Bottom -->
</footer>