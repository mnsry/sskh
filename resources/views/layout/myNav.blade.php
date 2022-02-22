<ul class="navbar-nav default">

    @foreach ($items as $item)

        @php

            $originalItem = $item;
            if (Voyager::translatable($item)) {
                $item = $item->translate($options->locale);
            }

        @endphp

        <li class="@if(!$originalItem->children->isEmpty()) sub-menu @endif">
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}">
                {{ $item->title }}
            </a>
            @if(!$originalItem->children->isEmpty())
                @include('layout.myNavSub', ['items' => $originalItem->children, 'options' => $options])
            @endif
        </li>
    @endforeach

</ul>
