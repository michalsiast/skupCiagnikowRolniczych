<div class="section-content mt-5">
    <div class="row g-4 gy-5 g-xl-5">
        @php $counter = 1; @endphp
        @foreach($items as $item)
            <div class="col-sm-6 col-md-4">
                <div class="service-item" data-aos="fade-up">
                    <div class="description">
                        <h5 class="service-title">
                            {{$counter}}. {{$item->title}}
                        </h5>
                        {!! $item->text !!}
                    </div>
                </div>
            </div>
            @php $counter++; @endphp
        @endforeach
    </div>
</div>




