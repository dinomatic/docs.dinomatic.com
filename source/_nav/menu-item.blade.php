<li class="{{ 0 === $level ? 'level-0' : '' }}">
    @if ($url = is_string($item) ? $item : $item->url)
        {{-- Menu item with URL--}}
        <a href="{{ $page->url($url) }}"
            class="
                {{ 'lvl' . $level }}
                {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active' : '' }}
                {{ $page->isActive($url) ? 'active' : '' }}
                {{ 0 === $level ? 'level-0' : '' }}
                nav-menu__item"
        >
            {{ $label }}
        </a>
    @else
        {{-- Menu item without URL--}}
        <p class="nav-menu__item">{{ $label }}</p>
    @endif

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
    @endif
</li>
