<ul class="list float-right">

    @foreach ($items as $item)

        @php
            $originalItem = $item;
            if (Voyager::translatable($item)) {
                $item = $item->translate($options->locale);
            }
        @endphp

        <li class="list-item @if(!$originalItem->children->isEmpty()) list-item-has-children mega-menu mega-menu-col-5 @endif">
            <a href="{{ url($item->link()) }}" class="nav-link" target="{{ $item->target }}">
                {{ $item->title }}
            </a>
            @if(!$originalItem->children->isEmpty())
                @include('layout.myHeaderSub', ['items' => $originalItem->children, 'options' => $options])
            @endif
        </li>
    @endforeach

</ul>

