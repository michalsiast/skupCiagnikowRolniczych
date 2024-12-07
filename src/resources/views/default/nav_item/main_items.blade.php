@if($items->count() > 0)
    @foreach($items as $item)
        @php
            $isActive = false;
            $url = null;
            $target = '_self';
            if($item->page) {
                $url = route($item->page->type);
            }
            else {
                $url = url()->to($item->url);
            }
            if($item->target) {
                $target = $item->target;
            }
            $isActive = request()->fullUrlIs($url);
        @endphp
        @if($item->navItems->count() > 0)
            <li class="menu-item menu-item-has-children {{ $isActive ? 'active' : '' }}">
                <a href="{{$url}}" class="menu-link" target="{{$target}}">
                    {{$item->label}}
                </a>
                <ul class="sub-menu">
                    @foreach($item->navItems as $subItem)
                        @php
                            $isActive = false;
                            $url = null;
                            $target = '_self';
                            if($subItem->page) {
                                $url = route($subItem->page->type);
                            }
                            else {
                                $url = url()->to($subItem->url);
                            }
                            if($subItem->target) {
                                $target = $subItem->target;
                            }
                            $isActive = request()->fullUrlIs($url);
                        @endphp
                        <li class="menu-item {{ $isActive ? 'active' : '' }}">
                            <a href="{{$url}}" class="menu-link" target="{{$target}}">
                                {{ $subItem->label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @else
            <li class="menu-item {{ $isActive ? 'active' : '' }}">
                <a href="{{$url}}" class="menu-link" target="{{$target}}">
                    {{$item->label}}
                </a>
            </li>
        @endif
    @endforeach
@endif
