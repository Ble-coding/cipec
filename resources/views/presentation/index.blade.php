<section class="about-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow animated fadeInLeft" data-wow-delay="0.1s">
                <div class="about-one__img-box">
                    <div class="about-one__img-box-inner">
                        <img src="assets/img/about/about-one-1.jpg" alt="#">
                    </div>
                </div>
            </div>

            <div class="col-xl-6 wow animated fadeInRight" data-wow-delay="0.1s">
                <div class="about-one__content-box">
                    <div class="sec-title">
                        <div class="sub-title">
                            <h4>{{ __('home.about_cipec.title') }}</h4>
                        </div>
                        <h2>{{ __('home.about_cipec.subtitle') }}</h2>
                    </div>
                    <div class="text">
                        <p>
                            {{ __('home.about_cipec.content') }}
                        </p>
                    </div>
                    <div class="about-one__content-list-box">
                        <ul>
                            @foreach(__('home.about_cipec.list_items') as $item)
                            <li>
                                <div class="circle-box"></div>
                                <p>{{ $item }}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>   