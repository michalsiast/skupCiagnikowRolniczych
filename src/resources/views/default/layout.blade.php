<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Teko:wght@300..700&display=swap" rel="stylesheet">

    <link href="{{asset('css/vendors/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontAwesome5Pro.css')}}" rel="stylesheet">
    <link href="{{asset('css/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/aos.css')}}" rel="stylesheet">
    <link href="{{asset('css/qunesa-main.css')}}" rel="stylesheet">
    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Preloader Start
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="preloader">
    <p class="text">
        ŁADOWANIE
        <span class="loadbar"></span>
    </p>
</div>
<!--~~./ Preloader End ~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Start Site Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="qu-site-header">
    <nav class="nav-primary">
        <a href="/" class="navbar-brand p-0">
            <h2 class="text-white" style="font-size: 27px;">Skup ciągników rolniczych</h2>
        </a>

        <ul class="primary-nav-menu mr-0">
            @include('default.nav_item.main', ['name' => 'main'])
        </ul>
        <button class="sidebar__toggle text-white" type="button">
            <svg width="34" height="24" viewBox="0 0 34 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 2C0.75 1.30964 1.30964 0.75 2 0.75H32C32.6904 0.75 33.25 1.30964 33.25 2C33.25 2.6904 32.6904 3.25 32 3.25H2C1.30964 3.25 0.75 2.6904 0.75 2Z" fill="currentcolor"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 22C0.75 21.3096 1.30964 20.75 2 20.75H32C32.6904 20.75 33.25 21.3096 33.25 22C33.25 22.6904 32.6904 23.25 32 23.25H2C1.30964 23.25 0.75 22.6904 0.75 22Z" fill="currentcolor"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4165 12C7.4165 11.3096 7.9761 10.75 8.6665 10.75H31.9998C32.6902 10.75 33.2498 11.3096 33.2498 12C33.2498 12.6904 32.6902 13.25 31.9998 13.25H8.6665C7.9761 13.25 7.4165 12.6904 7.4165 12Z" fill="currentcolor"/>
            </svg>
        </button>
    </nav>
</header>
<!--~~./ end site header ~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Start Offcanvas Menu
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="overlay-menu"></div>
<div class="offcanvas-menu">
    <div class="menu-header">
        <a href="/" class="navbar-brand p-0">
            <h2 class="text-white" style="font-size: 17px;">Skup ciągników rolniczych</h2>
        </a>
        <button class="close-menu">
            <i class="fal fa-times"></i>
        </button>
    </div>
    <div class="menu-body">
        <ul class="primary-nav-menu">
            @include('default.nav_item.main', ['name' => 'main'])
        </ul>
    </div>
</div>
<!--~~./ end Offcanvas Menu ~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Start main
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<main class="creative">
{{--@include('default._helpers.lang_nav')--}}

    @yield('content')

</main>
<!--~~./ end main ~~-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Start Site Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer>
    <div class="footer-bottom">
        <p class="copyright_text text-center">
            <?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.pl">Palmax</a>
        </p>
    </div>
</footer>
<!--~~./ end site Footer ~~-->

<!-- Background Line Pattern -->
<div class="line-pattern-group">
    <div></div>
    <div></div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/glightbox.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/packery-mode.pkgd.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
@stack('scripts.body.bottom')
</body>
</html>
