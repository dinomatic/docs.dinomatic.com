@php $level = $level ?? 0 @endphp

<ul style="margin: 0; list-style-type: none;">
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
</ul>
