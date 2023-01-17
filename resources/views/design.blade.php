@extends('layout.main')
@section('link')
<link rel="preload" as="image" href="http://personal.test/img/design/design_hero.png">
@endsection

@section('css')
@vite('resources/css/design.css')
@endsection

@section('content')
<section class="bg-design">
    <div class="container">
        <div class="grid justify-center px-5 pt-10 md:pb-10 md:px-10 lg:px-20 ">
            <div class="grid items-center px-5 md:grid-cols-2">
                <div class="">
                    <h2 class="mb-3 text-4xl font-bold text-center md:text-left lg:text-5xl text-black/80">My Our Design
                    </h2>
                    <h3 class="text-lg font-semibold text-center bg-slate-100 md:text-left md:text-2xl text-black/75">
                        My selected project that I made with all my heart, for my clients to make their design ideas
                        come true, and grow
                        their
                        company.
                    </h3>
                    <a href="#project">
                        <button
                            class="block px-5 py-2 mx-auto mt-5 text-lg font-semibold text-white bg-purple-600 rounded-lg md:mx-0">
                            Scroll down ⤵
                        </button>
                    </a>
                </div>
                <div>
                    <img class="py-5 md:py-0 drop-shadow-2xl" src="img/design/design_hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="project" class="mb-10">
    <div class="container">
        <div class="grid justify-center gap-5 px-5 md:grid-cols-2 lg:grid-cols-3 md:px-10 lg:px-20 md:gap-5">
            @foreach ($designs as $design)
            <div data-aos="zoom-in" class="block p-4 bg-white shadow rounded-xl ">
                <img loading="lazy" class="w-full rounded-lg" src="{{ $design->image }}" alt="{{ $design->tittle }}">
                <span class="flex gap-5 mt-3 font-semibold ">
                    <u class="text-purple-500">#Figma</u>
                </span>
                <h3 class="text-xl font-semibold lg:text-2xl text-black/90">
                    {{ $design->tittle }}
                </h3>
                <p class="mb-3 text-sm lg:text-base text-black/50">
                    {{ $design->description }}
                </p>
                <a href="">
                    <button class="flex gap-3 text-sm font-semibold lg:text-lg text-black/70 hover:text-purple-600">
                        <i class="bi bi-clipboard-check-fill"></i>
                        <span class="underline">
                            View Detail study case (soon)
                        </span>
                    </button>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection