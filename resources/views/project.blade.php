@extends('layout.main')

@section('content')
<section class="bg-1">
 <div class="container">
  <div class="grid justify-center px-5 pt-10 md:px-10 lg:px-20">
   <div class="grid items-center px-5 md:grid-cols-2">
    <div class="">
     <h2 class="mb-3 text-4xl font-bold text-center md:text-left lg:text-5xl text-black/80">My Our Project</h2>
     <h3 class="text-lg font-semibold text-center md:text-left md:text-2xl text-black/75">
      My selected project that I made with all my heart, for my clients to make their design ideas come true, and grow
      their
      company.
     </h3>
     <a href="#project">
      <button class="block px-5 py-2 mx-auto mt-5 text-lg font-semibold text-white bg-purple-600 rounded-lg md:mx-0">
       Scroll down ⤵
      </button>
     </a>
    </div>
    <div>
     <img class="drop-shadow-2xl" src="img/project/project-hero.png" alt="">
    </div>
   </div>
  </div>
 </div>
</section>
<section id="project" class="mb-10">
 <div class="grid justify-center gap-5 px-5 md:grid-cols-2 md:px-10 lg:px-20 md:gap-10">
  @foreach ($projects as $project)
  <div data-aos="fade-up" data-aos-delay="" class="block p-4 bg-white rounded-xl ">
   <img class="w-full rounded-lg" src="{{ $project['image'] }}" alt="{{ $project['tittle'] }}">
   <span class="flex gap-5 mt-3 font-semibold ">
    <u class="text-purple-500">#Figma</u>
   </span>
   <h3 class="text-xl font-semibold lg:text-2xl text-black/90">
    {{ $project['tittle'] }}
   </h3>
   <p class="mb-3 text-sm lg:text-base text-black/50">
    Comming Soon....
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
</section>
@endsection