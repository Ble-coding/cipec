<!doctype html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') @yield('subtile')</title>

    
    <meta name="description" content="@yield('description')">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/cipec.svg">
    <!-- Place favicon.ico in the root directory -->

    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS here -->
    @include('layouts.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
</head>

<body class="body-gray-bg">

    <!--Start Preloader -->
     @include('layouts.preloader')
    <!--End Preloader-->


    <div class="page-wrapper">

        <!--Start Main Header One -->
        @include('layouts.header')
        <!--End Main Header One -->


        @yield('content')
       
        <!--Start Footer One-->
        @include('layouts.footer')
        <!--Start Footer One-->
    </div>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-down-arrow"></i>
    </button>
    <!-- Scroll-top-end-->

    <!--Start Search Popup -->
    {{-- <div class="search-popup">
        <div class="search-popup__overlay search-toggler">
            <div class="search-close-btn">
                <i class="icon-plus"></i>
            </div>
        </div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">rechercher ici</label>
                <input type="search" id="search" placeholder="Rechercher ici..." />
                <button type="submit" aria-label="valider la recherche" class="btn-one">
                    <i class="icon-search-interface-symbol"></i>
                </button>
            </form>  
        </div>
    </div> --}}
    <!--End Search Popup -->



    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdown = document.querySelector('.menu-wrap');
            var options = document.querySelector('.navigation');

            dropdown.addEventListener('click', function() {
                options.classList.toggle('show');
            });

            options.addEventListener('click', function(event) {
                var lang = event.target.getAttribute('data-lang');
                if (lang) {
                    window.location.href = '/change-language?lang=' + lang; // Remplacez l'URL par celle de votre route de changement de langue
                }
            });

            document.addEventListener('click', function(event) {
                if (!dropdown.contains(event.target)) {
                    options.classList.remove('show');
                }
            });
        });

    </script>
     --}}
    <!-- JS here -->    
    @include('layouts.footer-scripts')

    
</body>

</html>