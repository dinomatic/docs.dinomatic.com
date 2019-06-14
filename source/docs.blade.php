@extends('_layouts.master')

@section('body')

<section class="container max-w-4xl mx-auto p-8">
        <h1>{{ $page->siteName }}</h1>

        <h2 class="font-light mt-4">{{ $page->siteDescription }}</h2>
</section>

<section class="container max-w-4xl mx-auto p-8">
    <h3 class="text-3xl font-black mb-4">Documentations</h3>

    {{-- <hr class="block my-8 border lg:hidden"> --}}

    <div class="flex flex-wrap items-center -mx-4">

        <h4 class="px-4 text-xl text-blue-darkest mb-8 mt-0 w-full sm:w-1/2 md:w-1/4">
            <div class="w-full p-4 flex items-center border-b border-teal">
                <img src="/assets/img/icon-stack.svg" class="h-18 w-8 mr-4" alt="Akurai Docs">
                <a class="uppercase text-grey-dark font-light" href="/docs/akurai">Akurai <br class="hidden md:block lg:hidden" />Docs</a>
            </div>
        </h4>

        <h4 class="px-4 text-xl text-blue-darkest mb-8 mt-0 w-full sm:w-1/2 md:w-1/4">
            <div class="w-full p-4 flex items-center border-b border-teal">
                <img src="/assets/img/icon-stack.svg" class="h-18 w-8 mr-4" alt="Sikika Docs">
                <a class="uppercase text-grey-dark font-light" href="/docs/sikika">Sikika <br class="hidden md:block lg:hidden" />Docs</a>
            </div>
        </h4>

        <h4 class="px-4 text-xl text-blue-darkest mb-8 mt-0 w-full sm:w-1/2 md:w-1/4">
            <div class="w-full p-4 flex items-center border-b border-teal">
                <img src="/assets/img/icon-stack.svg" class="h-18 w-8 mr-4" alt="Kemoku Docs">
                <a class="uppercase text-grey-dark font-light" href="/docs/kemoku">Kemoku <br class="hidden md:block lg:hidden" />Docs</a>
            </div>
        </h4>

        <h4 class="px-4 text-xl text-blue-darkest mb-8 mt-0 w-full sm:w-1/2 md:w-1/4">
            <div class="w-full p-4 flex items-center border-b border-teal">
                <img src="/assets/img/icon-stack.svg" class="h-18 w-8 mr-4" alt="Nonaki Docs">
                <a class="uppercase text-grey-dark font-light" href="/docs/nonaki">Nonaki <br class="hidden md:block lg:hidden" />Docs</a>
            </div>
        </h4>

    </div>
</section>

@endsection
