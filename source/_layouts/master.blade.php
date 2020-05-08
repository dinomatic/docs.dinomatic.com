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

    <body class="flex flex-col justify-between min-h-screen text-grey-darker leading-normal font-sans">
        <a href="#content" class="screen-reader-text">Skip to content</a>
        <header class="flex items-center shadow bg-white border-b mb-8 py-2 sticky pin-t" role="banner">
            <div class="container flex items-center justify-between max-w-4xl mx-auto px-4">
                <div class="flex items-center flex-no-shrink">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center text-teal-darkest hover:text-teal-darker">
                        <img src="/assets/img/icon-book.svg" class="h-5 w-5 mr-2" alt="stack icon">
                        <span class="text-lg md:text-2xl font-semibold my-0 pr-4">{{ $page->siteName }}</span>
                    </a>
                </div>

                @include('_nav.search-input')
            </div>

            @yield('nav-toggle')
        </header>

        <main id="main" role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        @if ($page->production)
        <script>
        (function(f, a, t, h, o, m){
            a[h]=a[h]||function(){(a[h].q=a[h].q||[]).push(arguments)};
            o=f.createElement('script'),
            m=f.getElementsByTagName('script')[0];
            o.async=1; o.src=t; o.id='fathom-script';
            m.parentNode.insertBefore(o,m)
        })(document, window, 'https://cdn.usefathom.com/tracker.js', 'fathom');
        fathom('set', 'siteId', 'PGGZQLHA');
        fathom('trackPageview');
        </script>
        @endif

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    </body>
</html>
