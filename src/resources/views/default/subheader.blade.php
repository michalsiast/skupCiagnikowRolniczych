<div class="page-banner">
    <div class="background" style="background: url({{asset('images/home-hero-bg.jpg')}}) no-repeat center / cover;"></div>
    <div class="container">
        <div class="banner-content">
            <h1 class="text-center text-white" data-aos="fade-up">
                {!! $pageName !!}
            </h1>
            <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="100">
                <ol class="breadcrumb text-white">
                    <li class="breadcrumb-item">
                        <a href="/">Strona główna</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        {!! $pageName !!}
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
