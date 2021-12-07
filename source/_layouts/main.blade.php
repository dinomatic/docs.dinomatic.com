<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="{{ $page->baseUrl }}/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="{{ $page->baseUrl }}/favicon.svg">

        @stack('meta')

        <link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body>
        <a href="#content" class="screen-reader-text">Skip to content</a>

        <header id="header" class="header" role="banner">
            <div class="container">
                <div class="logo-wrapper">
                    <a href="/" title="{{ $page->siteName }}" class="logo">
                        @include('_svg.book')
                        <span>{{ $page->siteName }}</span>
                    </a>
                </div>

                @include('_nav.search-input')
            </div>

            @yield('nav-toggle')
        </header>

        <main id="main" role="main" class="main">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        @if ($page->production)
        <script async defer data-domain="docs.dinomatic.com" src="https://plausible.io/js/plausible.js"></script>
        @endif

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    </body>
</html>
