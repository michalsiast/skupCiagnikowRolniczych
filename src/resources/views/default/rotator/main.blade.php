<section class="qu-hero">
    <div class="creative-hero-slider" data-carousel="swiper" data-items="1" data-loop="true" data-space="30" data-autoplay="true" data-swiper-speed="1500" data-delay="8000" data-effect="fade">
        <div class="swiper" id="creative-hero-slider" data-swiper="container">
            <div class="swiper-wrapper">
                @foreach($rotator->gallery->items as $item)
                    <div class="swiper-slide">
                        <div class="hero-content-area" style="background-image: url({{renderImage($item->url, 1920, 700, `fit`)}});">
                            <div class="container">
                                <h1 class="hero-title">
                                    {{$item->name}}
                                </h1>
                                {!! str_replace('<p>', '<p class="hero-desc">', $item->text) !!}
                                <div class="btn-group-area">
                                    <a href="{{route('gallery.show')}}" class="btn__primary">
                                        Galeria
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if($rotator->arrows)
                <div class="swiper-nav">
                    <button id="prev_slide" data-swiper="prev">
                        <svg width="40" height="20" viewBox="0 0 40 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M38.4375 8.43749H5.34706L10.8286 2.98249C11.4403 2.37374 11.4426 1.38445 10.8339 0.772807C10.2251 0.161088 9.23573 0.158823 8.62409 0.767495L0.459717 8.8925C0.45917 8.89296 0.45878 8.89351 0.458311 8.89398C-0.151767 9.50273 -0.15372 10.4952 0.458155 11.106C0.458701 11.1065 0.459092 11.107 0.459561 11.1075L8.62394 19.2325C9.2355 19.8411 10.2249 19.839 10.8337 19.2272C11.4425 18.6155 11.4401 17.6262 10.8285 17.0175L5.34706 11.5625H38.4375C39.3005 11.5625 40 10.863 40 9.99999C40 9.13703 39.3005 8.43749 38.4375 8.43749Z" fill="currentcolor"/>
                        </svg>
                    </button>
                    <button id="next_slide" data-swiper="next">
                        <svg width="40" height="20" viewBox="0 0 40 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.56247 8.43749H34.6529L29.1714 2.98249C28.5597 2.37374 28.5574 1.38445 29.1661 0.772807C29.7749 0.161088 30.7643 0.158823 31.3759 0.767495L39.5403 8.8925C39.5408 8.89296 39.5412 8.89351 39.5417 8.89398C40.1518 9.50273 40.1537 10.4952 39.5418 11.106C39.5413 11.1065 39.5409 11.107 39.5404 11.1075L31.3761 19.2325C30.7645 19.8411 29.7751 19.839 29.1663 19.2272C28.5575 18.6155 28.5599 17.6262 29.1715 17.0175L34.6529 11.5625H1.56247C0.699501 11.5625 -3.05176e-05 10.863 -3.05176e-05 9.99999C-3.05176e-05 9.13703 0.699501 8.43749 1.56247 8.43749Z" fill="currentcolor"/>
                        </svg>
                    </button>
                </div>
            @endif
        </div>
    </div>
</section>

@push('scripts.body.bottom')
    <script>
        $('#rotator{{$rotator->id}}').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: {{$rotator->time ?? 3000}},
            speed: {{$rotator->speed ?? 500}},
            arrows: {{$rotator->arrows ? 'true' : 'false'}},
            dots: {{$rotator->pager ? 'true' : 'false'}},
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            pauseOnHover: false
        });
    </script>
@endpush
