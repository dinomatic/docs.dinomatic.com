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

    <div class="flex flex-wrap justify-end -mx-2">

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

        <h4 class="heading--main"></h4>

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

        <h4 class="heading--main">
            <a href="/docs/hello-cookie/" class="text-black">
                <img src="/assets/img/icon-stack.svg" alt="Hello Cookie Docs">
                Hello Cookie Docs
            </a>
        </h4>
    </div>
</section>

<section class="container max-w-4xl mx-auto my-16 px-4 py-16 border-b border-grey-lightest demos">

    <article class="flex flex-wrap justify-end">

        <h4 class="heading--secondary">
            <span>
                <img src="/assets/img/icon-window.svg" alt="Akurai Demos">
                Demos
            </span>
        </h4>

        <h4 class="heading--secondary">
            <a href="https://dinomatic.com/demos/akurai" class="text-grey">
                <img src="/assets/img/icon-window.svg" alt="Akurai Demos">
                Akurai Demos
            </a>
        </h4>

        <h4 class="heading--secondary">
            <a href="https://dinomatic.com/demos/sikika" class="text-grey">
                <img src="/assets/img/icon-window.svg" alt="Sikika Demos">
                Sikika Demos
            </a>
        </h4>

        <h4 class="heading--secondary">
            <a href="https://dinomatic.com/demos/kemoku" class="text-grey">
                <img src="/assets/img/icon-window.svg" alt="Kemoku Demos">
                Kemoku Demos
            </a>
        </h4>

        <h4 class="heading--secondary">
            <a href="https://dinomatic.com/demos/dinodds" class="text-grey">
                <img src="/assets/img/icon-window.svg" alt="DinOdds Demos">
                DinOdds Demos
            </a>
        </h4>

    </article>
</section>

<section class="container max-w-4xl mx-auto my-16 px-4 py-16 border-b border-grey-lightest links">

    <article class="flex flex-wrap justify-end">

        <h4 class="heading--secondary">
            <span>
                <img src="/assets/img/icon-terminal.svg" alt="Support">
                Links
            </span>
        </h4>

        <h4 class="heading--secondary">
            <a href="https://dinomatic.com/account" class="text-grey">
                <img src="/assets/img/icon-terminal.svg" alt="Support">
                Get Support
            </a>
        </h4>

        <h4 class="heading--secondary">
            <a href="https://dinomatic.com/contact" class="text-grey">
                <img src="/assets/img/icon-terminal.svg" alt="Contact">
                Get in Touch
            </a>
        </h4>

        <h4 class="heading--secondary">
            <a href="https://dinomatic.com/posts" class="text-grey">
                <img src="/assets/img/icon-terminal.svg" alt="Blog Posts">
                Blog Posts
            </a>
        </h4>

        <h4 class="heading--secondary">
            <a href="https://dinomatic.com/posts/wordpress-hosting" class="text-grey">
                <img src="/assets/img/icon-terminal.svg" alt="WordPress Hosting">
                WordPress Hosting
            </a>
        </h4>

    </article>
</section>
@endsection
