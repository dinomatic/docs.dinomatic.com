@extends('_layouts.master')

@section('body')

<svg viewbox="0 0 900 400" class="banner">
    <path id="curve" fill="#38a89d" d="M 900 300 Q 400 350 0 300 L 0 0 L 900 0 L 900 300 Z"></path>
</svg>

<section id="home" class="container max-w-4xl mx-auto py-16 px-4 text-center" id="content">
        <h1 class="text-3xl sm:text-6xl">{{ $page->siteName }}</h1>
        <h2 class="text-2xl font-light mt-4">{{ $page->siteDescription }}</h2>
</section>

<section class="container max-w-4xl mx-auto mb-16 px-4 py-16 border-b border-grey-lightest docs">

    <div class="flex flex-wrap justify-between -mx-2">

        <h4 class="heading--main">
            <span>
                <img src="/assets/img/icon-stack.svg" alt="Akurai Docs">
                Documentations
            </span>
        </h4>

        <h4 class="heading--main">
            <a href="/docs/akurai/" class="text-black">
                <img src="/assets/img/icon-stack.svg" alt="Akurai Docs">
                Akurai Docs
            </a>
        </h4>

        <h4 class="heading--main">
            <a href="/docs/sikika/" class="text-black">
                <img src="/assets/img/icon-stack.svg" alt="Sikika Docs">
                Sikika Docs
            </a>
        </h4>

        <h4 class="heading--main">
            <a href="/docs/kemoku/" class="text-black">
                <img src="/assets/img/icon-stack.svg" alt="Kemoku Docs">
                Kemoku Docs
            </a>
        </h4>

        <h4 class="heading--main">
            <a href="/docs/dinodds/" class="text-black">
                <img src="/assets/img/icon-stack.svg" alt="DinOdds Docs">
                DinOdds Docs
            </a>
        </h4>

        <h4 class="heading--main">
            <a href="/docs/nonaki/" class="text-black">
                <img src="/assets/img/icon-stack.svg" alt="Nonaki Docs">
                Nonaki Docs
            </a>
        </h4>
    </div>
</section>

@endsection
