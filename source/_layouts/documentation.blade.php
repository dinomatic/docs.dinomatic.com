@extends('_layouts.main')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="docs-page container">
    <nav id="js-nav-menu" class="nav-menu">
        @include('_nav.menu', ['items' => $page->navigation])
    </nav>

    <article id="content" class="content" data-docs="true" v-pre>
        @yield('content')
    </article>

    <nav id="js-page-menu" class="page-menu">
        <h4>
            {{ strtoupper($page->product($page)) }} v{{ $page->version($page) }}
        </h4>

        <div id="page-menu-wrapper"></div>

        <h5>Links</h5>
        <ul>
            <li>
                <a href="https://dinomatic.com">DinoMatic.com</a>
            </li>
            <li>
                <a href="https://dinomatic.com/pro/pnn">Custom CSM</a>
            </li>
            <li>
                <a href="https://dinomatic.com/pro/websites">Starter Websites</a>
            </li>
            <li>
                <a href="https://dinomatic.com/services/web-development">Web Development Services</a>
            </li>
        </ul>
    </nav>
</section>
@endsection
