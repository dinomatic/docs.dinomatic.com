@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-4xl mx-auto px-6 md:px-8 py-4">
    <div class="flex flex-col lg:flex-row items-start">
        <nav id="js-nav-menu" class="nav-menu hidden lg:max-w-sidebar lg:block opacity-0
            sticky pin-t h-screen overflow-y-scroll">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <div id="content" class="w-full flex-1 break-words p-8 md:mx-8" data-docs="true" v-pre>
            @yield('content')
        </div>

        <nav id="js-page-menu" class="page-menu hidden py-8 lg:w-48 lg:max-w-sidebar lg:block sticky" style="top: 4rem;">
            <h4 class="mb-8 font-bold text-grey text-lg pb-1 border-b inline-block">
                {{ strtoupper($page->product($page)) }} v{{ $page->version($page) }}
            </h4>

            <div id="page-menu-wrapper" class="mb-8"></div>

            <h5 class="font-bold">Links</h5>
            <ul class="pl-0">
                <li class="mb-2 ml-2 text-sm">
                    <a href="https://dinomatic.com">DinoMatic.com</a>
                </li>
                <li class="mb-2 ml-2 text-sm">
                    <a href="https://dinomatic.com/posts">Blog Posts</a>
                </li>
                <li class="mb-2 ml-2 text-sm">
                    <a href="https://dinomatic.com/affiliates">Become an Affiliate</a>
                </li>
                <li class="mb-2 ml-2 text-sm">
                    <a href="https://dinomatic.com/posts/wordpress-hosting">WordPress Hosting</a>
                </li>
                <li class="mb-2 ml-2 text-sm">
                    <a href="https://dinomatic.com/services/web-development">Web Development Services</a>
                </li>
                <li class="mb-2 ml-2 text-sm">
                    <a href="https://dinomatic.com/services/speedup">SpeedUp Installing Your Themes & Plugins</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
@endsection
