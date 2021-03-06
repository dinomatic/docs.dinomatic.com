<li class="{{ 0 === $level ? 'mb-8 pl-0 level-0' : 'pl-2' }}">
    @if ($url = is_string($item) ? $item : $item->url)
        {{-- Menu item with URL--}}
        <a href="{{ $page->url($url) }}"
            class="{{ 'lvl' . $level }} {{ $page->isActiveParent($item) ? 'lvl' . $level . '-active' : '' }} {{ $page->isActive($url) ? 'active font-semibold text-teal-500 dark:text-teal-500' : '' }} {{ 0 === $level ? 'font-bold uppercase text-black' : '' }} nav-menu__item dark:text-white hover:text-black dark:hover:text-gray-300"
        >
            {{ $label }}
        </a>
    @else
        {{-- Menu item without URL--}}
        <p class="nav-menu__item text-gray-500">{{ $label }}</p>
    @endif

    @if (! is_string($item) && $item->children)
        {{-- Recursively handle children --}}
        @include('_nav.menu', ['items' => $item->children, 'level' => ++$level])
    @endif
</li>
