<ul class="sub-menu nav">

    @foreach ($items as $item)

        @php
            $originalItem = $item;
            if (Voyager::translatable($item)) {
                $item = $item->translate($options->locale);
            }
        @endphp

        <li class="list-item list-item-has-children">
            <i class="now-ui-icons arrows-1_minimal-left"></i>
            <a href="{{ url($item->link()) }}" class="main-list-item nav-link" target="{{ $item->target }}">
                {{ $item->title }}
            </a>
            @if(!$originalItem->children->isEmpty())
                @include('layout.myHeaderSub', ['items' => $originalItem->children, 'options' => $options])
            @endif
        </li>
    @endforeach

</ul>

