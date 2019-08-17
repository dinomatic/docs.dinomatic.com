@extends('_layouts.master')

@section('body')

<section class="container max-w-4xl mx-auto mb-16 py-8 px-4" id="content">
        <h1>{{ $page->siteName }}</h1>

        <h2 class="font-light mt-4">{{ $page->siteDescription }}</h2>
</section>

<section class="flex flex-wrap container max-w-4xl mx-auto px-4">

    <article class="w-full md:w-1/3">
        <h3 class="heading--3">Documentations</h3>

        <h4 class="heading--4">
            <a href="/docs/akurai/">
                <img src="/assets/img/icon-stack.svg" alt="Akurai Docs">
                Akurai Docs
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="/docs/sikika/">
                <img src="/assets/img/icon-stack.svg" alt="Sikika Docs">
                Sikika Docs
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="/docs/kemoku/">
                <img src="/assets/img/icon-stack.svg" alt="Kemoku Docs">
                Kemoku Docs
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="/docs/dinodds/">
                <img src="/assets/img/icon-stack.svg" alt="DinOdds Docs">
                DinOdds Docs
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="/docs/nonaki/">
                <img src="/assets/img/icon-stack.svg" alt="Nonaki Docs">
                Nonaki Docs
            </a>
        </h4>

    </article>

    <article class="w-full md:w-1/3">
        <h3 class="heading--3">Demos</h3>

        <h4 class="heading--4">
            <a href="https://dinomatic.com/demos/akurai">
                <img src="/assets/img/icon-window.svg" alt="Akurai Demos">
                Akurai Demos
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="https://dinomatic.com/demos/sikika">
                <img src="/assets/img/icon-window.svg" alt="Sikika Demos">
                Sikika Demos
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="https://dinomatic.com/demos/kemoku">
                <img src="/assets/img/icon-window.svg" alt="Kemoku Demos">
                Kemoku Demos
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="https://dinomatic.com/demos/dinodds">
                <img src="/assets/img/icon-window.svg" alt="DinOdds Demos">
                DinOdds Demos
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="https://dinomatic.com/demos/nonaki">
                <img src="/assets/img/icon-window.svg" alt="Nonaki Demos">
                Nonaki Demos
            </a>
        </h4>

    </article>

    <article class="w-full md:w-1/3">
        <h3 class="heading--3">Links</h3>

        <h4 class="heading--4">
            <a href="https://dinomatic.com/account">
                <img src="/assets/img/icon-terminal.svg" alt="Support">
                Get Support
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="https://dinomatic.com/contact">
                <img src="/assets/img/icon-terminal.svg" alt="Contact">
                Get in Touch
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="https://dinomatic.com/posts">
                <img src="/assets/img/icon-terminal.svg" alt="Blog Posts">
                Blog Posts
            </a>
        </h4>

        <h4 class="heading--4">
            <a href="https://dinomatic.com/posts/wordpress-hosting">
                <img src="/assets/img/icon-terminal.svg" alt="WordPress Hosting">
                WordPress Hosting
            </a>
        </h4>

    </article>

</section>
@endsection
