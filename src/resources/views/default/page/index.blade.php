@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

@include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<section class="qu-about-us layout-2">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="cover-mockup" data-aos="fade-right">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="img">
                                <img src="{{asset('images/about_us.jpg')}}" alt="O nas">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title">
                    @if (!empty($fields->subtitle_about_us))
                        <h6 data-aos="fade-right">
                            {{$fields->subtitle_about_us}}
                        </h6>
                    @endif
                    @if (!empty($fields->header_about_us))
                        <h2 data-aos="fade-up" data-aos-delay="100">
                            {{$fields->header_about_us}}
                        </h2>
                    @endif
                    @if (!empty($fields->description_about_us))
                        {!! str_replace('<p>', '<p data-aos="fade-up" data-aos-delay="100">', $fields->description_about_us) !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<section class="qu-ceo-message">
    <div class="container-fluid">
        <div class="row gy-5">
            <div class="col-md-6 col-xl-7">
                <div class="section-image-wrapper">
                    <div class="img" data-aos="zoom-in-up">
                        <img src="{{asset('images/ceo_message.jpg')}}">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-5">
                <div class="content-wrapper">
                    <div class="section-title" style="--qu-color-slate: #383C43">
                        @if (!empty($fields->subtitle_ceo_message))
                            <h6 data-aos="fade-up">
                                {{$fields->subtitle_ceo_message}}
                            </h6>
                        @endif

                        @if (!empty($fields->title_ceo_message))
                            <h2 class="text-white" data-aos="fade-up">
                                {{$fields->title_ceo_message}}
                            </h2>
                        @endif
                        @include('default.article.home')
                    </div>
                    @if (!empty($fields->description_ceo_message))
                        <div class="section-content" data-aos="fade-up">
                            {!! str_replace('<p>', '<p class="text-white">', $fields->description_ceo_message) !!}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<section class="qu-service">
    <div class="container">
        <div class="section-title row align-items-center g-md-4">
            <div class="col-md-7">
                @if (!empty($fields->subtitle_service_quote))
                    <h6 data-aos="fade-right">
                        {{$fields->subtitle_service_quote}}
                    </h6>
                @endif

                @if (!empty($fields->title_service_quote))
                    <h2 data-aos="fade-right" data-aos-delay="100">
                        {{$fields->title_service_quote}}
                    </h2>
                @endif
            </div>
            <div class="col-md-5">
                @if (!empty($fields->description_service_quote))
                    <p class="text-md-end ms-md-auto mt-md-0" data-aos="fade-left" data-aos-delay="120">
                        {!! $fields->description_service_quote !!}
                    </p>
                @endif
            </div>
        </div>

        @include('default.article.category.home')
    </div>
</section>
<section class="qu-why-choose-us">
    <div class="container">
        <div class="row align-items-center g-4 g-xl-5">
            <div class="col-lg-12">
                <div class="section-title">
                    @if (!empty($fields->subtitle_why_choose_us))
                        <h6 data-aos="fade-right">
                            {{$fields->subtitle_why_choose_us}}
                        </h6>
                    @endif

                    @if (!empty($fields->title_why_choose_us))
                        <h2 data-aos="fade-right" data-aos-delay="50">
                            {{$fields->title_why_choose_us}}
                        </h2>
                    @endif
                </div>

                @include('default.realization.home')
            </div>
        </div>
    </div>
</section>
<section class="qu-service" style="margin-bottom: 0px">
    <div class="container">
        <div class="section-title row align-items-center g-md-4">
            <div class="col-md-7">
                @if (!empty($fields->subtitle_contact))
                    <h6 data-aos="fade-right">
                        {{$fields->subtitle_contact}}
                    </h6>
                @endif

                @if (!empty($fields->title_contact))
                    <h2 data-aos="fade-right" data-aos-delay="100">
                        {{$fields->title_contact}}
                    </h2>
                @endif
            </div>
            <div class="col-md-5">
                @if (!empty($fields->description_contact))
                    <p class="text-md-end ms-md-auto mt-md-0" data-aos="fade-left" data-aos-delay="120">
                        {!! $fields->description_contact !!}
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>
<section class="contact-information"  style="margin-top: 30px">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="contact-info-card" data-aos="fade-up">
                    <div class="icon">
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="info">
                        <h6 class="mb-2">
                            Napisz do nas
                        </h6>
                        <a style="color: #222429"  href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-info-card" data-aos="fade-up">
                    <div class="icon">
                        <i class="fal fa-phone-alt"></i>
                    </div>
                    <div class="info">
                        <h6 class="mb-2">
                            Zadzwoń do nas
                        </h6>
                        <a style="color: #222429" href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a><br>
                        <a style="color: #222429" href="tel:{{str_replace(' ', '', getConstField('phone2'))}}">{{getConstField('phone2')}}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="contact-info-card" data-aos="fade-up">
                    <div class="icon">
                        <i class="fal fa-map-marker-alt"></i>
                    </div>
                    <div class="info">
                        <h6 class="mb-2">
                            Odwiedź nas
                        </h6>
                        <address class="mb-0">
                            <a style="color: #222429" href="{{getConstField('google_map')}}">
                                {{getConstField('company_address')}}<br>
                                {{getConstField('company_post_code')}} {{getConstField('company_city')}}
                            </a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
