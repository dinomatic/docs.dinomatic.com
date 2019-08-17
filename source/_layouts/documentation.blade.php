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
            <div id="page-menu-wrapper"></div>
        </nav>
    </div>
</section>
@endsection
