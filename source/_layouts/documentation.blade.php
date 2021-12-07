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
                <a href="https://dinomatic.com/posts">Blog Posts</a>
            </li>
            <li>
                <a href="https://dinomatic.com/affiliates">Become an Affiliate</a>
            </li>
            <li>
                <a href="https://dinomatic.com/posts/wordpress-hosting">WordPress Hosting</a>
            </li>
            <li>
                <a href="https://dinomatic.com/services/web-development">Web Development Services</a>
            </li>
            <li>
                <a href="https://dinomatic.com/services/speedup">SpeedUp Installing Your Themes & Plugins</a>
            </li>
        </ul>
    </nav>
</section>
@endsection
