<ul class="ceo_section_list" data-aos="fade-up" data-aos-delay="150">
    @foreach($items as $item)
        <li>
            <h5>
                {{$item->title}}
            </h5>
            {!! $item->text !!}
        </li>
    @endforeach
</ul>
