<div class="section-content">
    <div class="row g-4">
        @foreach($items as $item)
            <div class="col-sm-4">
                <div class="card-item" data-aos="fade-up">
                    <div class="icon">
                        <img style="width: 40px" src="{{ renderImage($item->galleryCover(), 40, 40, 'cover') }}" alt="Creative Design">
                    </div>
                    <h5 class="title">
                        {{$item->title}}
                    </h5>
                    {!! $item->text !!}
                </div>
            </div>
        @endforeach
    </div>
</div>




