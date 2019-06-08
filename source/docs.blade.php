@extends('_layouts.master')

@section('body')

<section class="container max-w-4xl mx-auto p-8">
        <h1>{{ $page->siteName }}</h1>

        <h2 class="font-light mt-4">{{ $page->siteDescription }}</h2>
</section>

<section class="container max-w-4xl mx-auto p-8">
    <h2 class="text-3xl font-black mb-8">Documentations</h2>

    <hr class="block my-8 border lg:hidden">

    <div class="flex flex-wrap items-center">

        <h3 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12 mr-4" alt="Akurai Docs">
            <a class="text-grey-dark" href="/docs/akurai">Akurai <br class="hidden md:block lg:hidden" />Docs</a>
        </h3>

        <h3 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12 mr-4" alt="Sikika Docs">
            <a class="text-grey-dark" href="/docs/sikika">Sikika <br class="hidden md:block lg:hidden" />Docs</a>
        </h3>

        <h3 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12 mr-4" alt="Kemoku Docs">
            <a class="text-grey-dark" href="/docs/kemoku">Kemoku <br class="hidden md:block lg:hidden" />Docs</a>
        </h3>

        <h3 class="text-2xl md:text-xl lg:text-2xl text-blue-darkest mb-8 mt-0 flex items-center w-full sm:w-1/2 md:w-1/4">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12 mr-4" alt="Nonaki Docs">
            <a class="text-grey-dark" href="/docs/nonaki">Nonaki <br class="hidden md:block lg:hidden" />Docs</a>
        </h3>

    </div>
</section>
@endsection
