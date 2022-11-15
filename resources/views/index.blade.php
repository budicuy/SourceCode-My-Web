@extends('layout.main')

@section('meta')
<link rel="preload" as="image" href="img/logo-4.png">
<link rel="preload" as="image" href="img/logo-1.png">
<link rel="preload" as="image" href="img/logo-2.png">
<link rel="preload" as="image" href="img/logo-3.png">
<link rel="preload" as="image" href="img/userbg.png">
@endsection
@section('content')
{{-- Hero --}}
<section class="bg-1">
  <div class="container grid gap-0 px-2 md:px-0 hero lg:grid-cols-2 md:mt-0 ">
    <div class="flex items-center justify-center w-full h-full px-3 mt-5 lg:mt-0">
      <div class="relative">
        <h1 class="text-4xl font-bold leading-none md:text-6xl drop-shadow-xl">
          <span class="text-white strokeText"> Fullstack</span>
          <span class="text-purple-600">Web</span>
          <span class="text-purple-600 ">Developer</span>
          <span class="text-white strokeText"> &</span>
          <span class="text-purple-600 ">Web</span>
          <span class="text-white strokeText"> Designer</span>
        </h1>
        <p class="mt-3 text-sm md:text-lg text-slate-600">
          I'm <b>Fullstack</b> developer & <b>UI/UX</b> designer from Indonesia.
          I usually create content on <u>Github</u> and <u>Figma</u>,
          take freelance project at WhatsApps, and make <u>Digital Web
            products</u>. Happy to collaborate with you
        </p>
        <div class="flex items-center gap-2 mt-3 md:gap-3 ">
          <a href="#serve">
            <button
              class="px-5 py-3 mr-3 text-sm text-white bg-purple-500 rounded md:mr-5 neumorphism-shadow-1 lg:text-lg">Get
              Started</button>
          </a>
          <a href="https://www.instagram.com/budi_cuyy" target="blank"
            class="p-3 text-purple-500 transition-all duration-300 bg-white rounded-full shadow-lg hover:-translate-y-2 hover:bg-purple-500 hover:text-white shadow-purple-500">
            <svg class="w-4 h-4 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
          </a>
          <a href="https://github.com/budicuy" target="blank"
            class="p-3 text-purple-500 transition-all duration-300 bg-white rounded-full shadow-lg hover:-translate-y-2 hover:bg-purple-500 hover:text-white shadow-purple-500">
            <svg class="w-4 h-4 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
            </svg>
          </a>
          <a href="https://www.facebook.com/Budddx" target="blank"
            class="p-3 text-purple-500 transition-all duration-300 bg-white rounded-full shadow-lg hover:-translate-y-2 hover:bg-purple-500 hover:text-white shadow-purple-500">
            <svg class="w-4 h-4 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
          </a>
          <a href="https://www.twitter.com/kingbuddd" target="blank"
            class="p-3 text-purple-500 transition-all duration-300 bg-white rounded-full shadow-lg hover:-translate-y-2 hover:bg-purple-500 hover:text-white shadow-purple-500">
            <svg class="w-4 h-4 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg>
          </a>
        </div>
        <div class="inline-flex items-center gap-3 py-2 pl-2 pr-6 my-5 bg-purple-500 rounded-full neumorphism-shadow-1">
          <img src="img/me.jpg" alt="" class="w-12 h-12 border-2 border-white rounded-full shadow md:w-16 md:h-16">
          <p class="text-base text-white ">Hello there, i'm <b class="text-lg text-white">Budi</b></p>
        </div>
      </div>
    </div>
    <div class="relative mt-10 heroImage md:mt-0">
      <div class=" lg:mt-10">
        <img class="relative " src="img/userbg.png" alt="">
        <img class="absolute img-animated " src="img/logo-1.png" alt="">
        <img class="absolute img-animated " src="img/logo-2.png" alt="">
        <img class="absolute img-animated " src="img/logo-3.png" alt="">
        <img class="absolute img-animated " src="img/logo-4.png" alt="">
      </div>
    </div>
  </div>
</section>
{{-- Service --}}
<section id="serve">
  <div class="container py-20">
    <div class="mx-auto">
      <div class="flex flex-col items-center justify-center">
        <p class="font-semibold text-center lg:text-xl text-slate-600">what my serve</p>
        <h1 class="px-5 text-3xl font-bold text-center text-purple-600 lg:text-5xl mb-7 md:px-0">The Benefit Form My
          Service
        </h1>
      </div>
    </div>
    <div class="grid grid-cols-1 lg:items-center lg:grid-cols-3">
      @foreach ($service as $serve)
      <div data-aos="fade-up" data-aos-delay="100" class="px-10">
        <img loading="lazy" class="block mx-auto drop-shadow-lg w-[50%]" src="img/services/{{ $serve['image'] }}"
          alt="{{ $serve['tittle'] }}">
        <h4 class="mb-1 text-2xl font-bold text-center lg:text-3xl text-black/90">{{ $serve['tittle'] }}</h4>
        <p class="font-normal leading-7 text-center text-slate-600">Create eye-catching and powerful mobile apps with
          a
          focus on User
        </p>
        <a href="{{ $serve['link'] }}">
          <button
            class="block px-3 py-1 mx-auto mt-3 mb-5 text-xl text-white transition-all duration-300 bg-purple-500 rounded-sm hover:bg-white hover:text-purple-500 hover:-translate-y-2 neumorphism-shadow-2">See
            All</button>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>
{{-- My Projects --}}
<section class="py-10 bg-2">
  <div class="container">
    <div class="px-5 lg:px-20">
      <h1 class="mb-8 text-4xl font-bold text-center text-white md:text-left lg:mb-8 lg:text-5xl">
        My Project
      </h1>
      <div class="grid grid-cols-1 gap-5 mb-10 md:grid-cols-3">
        <?php $i = 100; ?>
        @foreach ($projects as $project)
        <div data-aos="fade-up" data-aos-delay="{{ $i }}" class="block p-4 bg-white rounded-xl ">
          <img loading="lazy" class="w-full rounded-lg" src="{{ $project->image }}" alt="{{ $project->tittle }}">
          <span class="flex gap-5 mt-3 font-semibold ">
            <u class="text-purple-500">#Figma</u>
          </span>
          <h5 class="text-xl font-semibold lg:text-2xl text-black/90">
            {{ $project->tittle }}
          </h5>
          <p class="mb-3 text-sm lg:text-base text-black/50">
            Comming Soon....
          </p>
          <a href="/">
            <button class="flex gap-3 text-sm font-semibold lg:text-lg text-black/70 hover:text-purple-600">
              <i class="bi bi-clipboard-check-fill"></i>
              <span class="underline">
                View Detail study case (soon)
              </span>
            </button>
          </a>
        </div>
        <?php $i += 100; ?>
        @endforeach
      </div>
      <a href="/project">
        <button
          class="block px-4 py-2 mx-auto mb-10 text-sm font-semibold text-purple-600 transition-all duration-300 rounded hover:bg-purple-600 hover:text-white hover:-translate-y-2 neumorphism-shadow-3 lg:text-base">
          View more...
        </button>
      </a>
    </div>
  </div>
</section>
{{-- Collaboration --}}
@include('components.collaboration')
{{-- My Design --}}
<section>
  {{-- Dekstop --}}
  <div class="hidden py-20 md:block bg-3">
    <div class="container">
      <div class="lg:px-20">
        <div class="flex justify-between pr-5 item-center">
          <h1 class="mb-5 text-5xl font-bold text-purple-600 ">
            My Design
          </h1>
          <a href="/design">
            <div class="flex items-center gap-3 text-2xl underline md:hidden text-slate-500">
              <span class="text-lg">View more</span>
              <i class="bi bi-arrow-right-circle"></i>
            </div>
          </a>
        </div>
        <div class="grid grid-cols-1 gap-5 mb-10 lg:grid-cols-3">
          <?php $i = 100; ?>
          @foreach ($designs as $design)
          <div data-aos="fade-up" data-aos-delay="{{ $i }}" class="block p-4 bg-white rounded-lg">
            <img loading="lazy" class="w-full rounded-lg cursor-pointer" src="{{ $design->image }}"
              alt="{{ $design->tittle }}">
            <span class="flex gap-5 mt-3 font-semibold">
              <u class="no-underline">#{{ $design->category->category_name }}</u>
            </span>
            <h3 class="text-xl font-semibold lg:text-2xl text-black/90">
              {{ $design->tittle }}
            </h3>
            <p class="mb-3 font-normal text-md lg:text-lg text-black/50">
              Description soon....
            </p>
            <a href="#">
              <button
                class="flex gap-3 text-sm font-semibold transition-all duration-200 lg:text-lg text-black/70 hover:text-blue-500">
                <i class="bi bi-clipboard-check-fill"></i>
                <span class="underline">
                  View Detail study case (soon)
                </span>
              </button>
            </a>
          </div>
          <?php $i += 100; ?>
          @endforeach
        </div>
      </div>
      <a href="/design">
        <button
          class="block px-4 py-2 mx-auto text-sm font-semibold text-white transition-all duration-300 bg-purple-600 rounded shadow hover:bg-white hover:text-purple-600 hover:-translate-y-2 neumorphism-shadow-1 lg:text-base">
          View more...
        </button>
      </a>
    </div>
  </div>
  {{-- Mobile --}}
  <div class="py-10 md:hidden bg-3">
    <div class="container ">
      <div class="flex justify-between pr-3 pl-7 item-center">
        <h1 class="text-3xl font-bold text-purple-600 ">
          My Design
        </h1>
        <a href="/design">
          <div class="flex items-center gap-3 text-2xl underline text-slate-500">
            <span class="text-lg">View more</span>
            <i class="bi bi-arrow-right-circle"></i>
          </div>
        </a>
      </div>
      <div class="swiper mySwiper ">
        <div class="pl-2 swiper-wrapper">
          @foreach ($designs as $design)
          <div class="py-5 max-w-[90%] swiper-slide">
            <div class="p-4 bg-white shadow-lg rounded-xl">
              <img loading="lazy" class="w-full mb-2 rounded-lg" src="{{ $design->image }}" alt="{{ $design->tittle }}">
              <span class="flex gap-5 font-semibold">
                <u>#Figma</u>
                <u>#Mobile Design</u>
              </span>
              <h3 class="text-xl font-semibold lg:text-2xl text-black/90">
                {{ $design->tittle }}
              </h3>
              <p class="mb-3 font-normal text-md lg:text-base text-black/50">
                Description soon....
              </p>
              <a href="#">
                <button class="flex gap-3 text-sm font-semibold lg:text-lg text-black/70 hover:text-black">
                  <i class="bi bi-clipboard-check-fill"></i>
                  <span class="underline">
                    View Detail study case ( soon )
                  </span>
                </button>
              </a>
            </div>
          </div>
          @endforeach
        </div>
        <div class="flex items-center justify-center mt-5">
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Special Sponsor --}}
<section class="py-10">
  <div class="container px-3 pb-20 overflow-x-hidden shadow-x-inner md:px-0">
    <div class="text-center">
      <h4 class="mb-1 text-4xl font-bold text-purple-600 md:text-5xl">Sponsor</h4>
      <p>Special thanks from me for brands :</p>
    </div>
    <div class="grid grid-cols-3 gap-2 mt-5 md:flex md:gap-4 md:slider-sponsor md:relative">
      <img loading="lazy" class="border-2 border-purple-600 rounded-lg w-52 slide" src="img/sponsor/brands-1.jpg"
        alt="SPONSOR">
      <img loading="lazy" class="border-2 border-purple-600 rounded-lg w-52 slide" src="img/sponsor/brands-2.jpg"
        alt="SPONSOR">
      <img loading="lazy" class="border-2 border-purple-600 rounded-lg w-52 slide" src="img/sponsor/brands-3.jpg"
        alt="SPONSOR">
      <img loading="lazy" class="border-2 border-purple-600 rounded-lg w-52 slide" src="img/sponsor/brands-4.jpg"
        alt="SPONSOR">
      <img loading="lazy" class="border-2 border-purple-600 rounded-lg w-52 slide" src="img/sponsor/brands-5.jpg"
        alt="SPONSOR">
      <img loading="lazy" class="border-2 border-purple-600 rounded-lg w-52 slide" src="img/sponsor/brands-6.jpg"
        alt="SPONSOR">
      <img loading="lazy" class="border-2 border-purple-600 rounded-lg w-52 slide" src="img/sponsor/brands-7.jpg"
        alt="SPONSOR">
      <img loading="lazy" class="border-2 border-purple-600 rounded-lg w-52 slide" src="img/sponsor/brands-8.jpg"
        alt="SPONSOR">
      <img loading="lazy" class="border-2 border-purple-600 rounded-lg w-52 slide" src="img/sponsor/brands-9.jpg"
        alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-1.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-2.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-3.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-4.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-5.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-6.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-7.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-8.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-9.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-1.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-2.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-3.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-4.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-5.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-6.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-7.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-8.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-9.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-1.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-2.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-3.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-4.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-5.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-6.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-7.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-8.jpg" alt="SPONSOR">
      <img loading="lazy" class="hidden border-2 border-purple-600 rounded-lg w-52 md:block slide"
        src="img/sponsor/brands-9.jpg" alt="SPONSOR">
    </div>
  </div>
</section>
@endsection