@extends('_layouts.master')

@section('body')

<section class="container max-w-4xl mx-auto p-8">
        <h1>{{ $page->siteName }}</h1>

        <h2 class="font-light mt-4">{{ $page->siteDescription }}</h2>
</section>

<section class="container max-w-4xl mx-auto p-8">
    <h3 class="text-3xl font-black mb-8">Documentations</h3>

    <hr class="block my-8 border lg:hidden">

    <div class="flex flex-wrap items-center">

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12 mr-4" alt="Akurai Docs">
            <a class="text-grey-dark font-light" href="/docs/akurai">Akurai <br class="hidden md:block lg:hidden" />Docs</a>
        </h4>

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12 mr-4" alt="Sikika Docs">
            <a class="text-grey-dark font-light" href="/docs/sikika">Sikika <br class="hidden md:block lg:hidden" />Docs</a>
        </h4>

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12 mr-4" alt="Kemoku Docs">
            <a class="text-grey-dark font-light" href="/docs/kemoku">Kemoku <br class="hidden md:block lg:hidden" />Docs</a>
        </h4>

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12 mr-4" alt="Nonaki Docs">
            <a class="text-grey-dark font-light" href="/docs/nonaki">Nonaki <br class="hidden md:block lg:hidden" />Docs</a>
        </h4>

    </div>
</section>

<section class="container max-w-4xl mx-auto p-8">
    <h3 class="text-3xl font-black mb-8">Demos</h3>

    <hr class="block my-8 border lg:hidden">

    <div class="flex flex-wrap items-center">

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12 mr-4" alt="Akurai Demos">
            <a class="text-grey-dark font-light" href="https://dinomatic.com/demos/akurai">Akurai <br class="hidden md:block lg:hidden" />Demos</a>
        </h4>

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12 mr-4" alt="Sikika Demos">
            <a class="text-grey-dark font-light" href="https://dinomatic.com/demos/sikika">Sikika <br class="hidden md:block lg:hidden" />Demos</a>
        </h4>

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12 mr-4" alt="Kemoku Demos">
            <a class="text-grey-dark font-light" href="https://dinomatic.com/demos/kemoku">Kemoku <br class="hidden md:block lg:hidden" />Demos</a>
        </h4>

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12 mr-4" alt="Nonaki Demos">
            <a class="text-grey-dark font-light" href="https://dinomatic.com/demos/nonaki">Nonaki <br class="hidden md:block lg:hidden" />Demos</a>
        </h4>

    </div>
</section>

<section class="container max-w-4xl mx-auto p-8">
    <h3 class="text-3xl font-black mb-8">Support</h3>

    <hr class="block my-8 border lg:hidden">

    <div class="flex flex-wrap items-center">
        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12 mr-4" alt="Support">
            <a class="text-grey-dark font-light" href="https://dinomatic.com/account">Get <br class="hidden md:block lg:hidden" />Support</a>
        </h4>

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12 mr-4" alt="Blog Posts">
            <a class="text-grey-dark font-light" href="https://dinomatic.com/posts">Blog <br class="hidden md:block lg:hidden" />Posts</a>
        </h4>

        <h4 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12 mr-4" alt="WordPress Hosting">
            <a class="text-grey-dark font-light" href="https://dinomatic.com/posts/wordpress-hosting">WordPress <br class="hidden md:block lg:hidden" />Hosting</a>
        </h4>

    </div>
</section>
@endsection
