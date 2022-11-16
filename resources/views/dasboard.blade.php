@extends('layout.dasboard')

@section('css')
@vite('resources/css/dasboard.css')
@endsection
@section('script')
@vite('resources/js/dasboard.js')
@endsection
@section('content')
<div>
  <div class="container mt-5">
    <div class="z-0 pb-10 swiper mySwiper">
      <div class="swiper-wrapper ">
        <div class="p-5 bg-white rounded-lg shadow-lg swiper-slide">
          <div class="flex items-center gap-5">
            <div class="px-5 text-5xl font-semibold text-center border-x">
              {{ $designs->count() }}
            </div>
            <div class="text-left">
              <h6 class="text-2xl font-semibold text-purple-600">All Design</h6>
              <a class="text-sm" href="#">Total your making the
                design</a>
              <p class="textt-3xl font-semibo">
              </p>
            </div>
          </div>
        </div>
        <div class="p-5 bg-white rounded-lg shadow-lg swiper-slide">
          <div class="flex items-center gap-5">
            <div class="px-5 text-5xl font-semibold text-center border-x">
              {{ $projects->count() }}
            </div>
            <div class="text-left">
              <h6 class="text-2xl font-semibold text-purple-600">All Project</h6>
              <a class="text-sm" href="#">Total your making the
                project</a>
              <p class="textt-3xl font-semibo">
              </p>
            </div>
          </div>
        </div>
        <div class="p-5 bg-white rounded-lg shadow-lg swiper-slide">
          <div class="flex items-center gap-5">
            <div class="px-5 text-5xl font-semibold text-center border-x">
              {{ $users->count() }}
            </div>
            <div class="text-left">
              <h6 class="text-2xl font-semibold text-purple-600">All User</h6>
              <a class="text-sm" href="#">This all user active in your site</a>
              <p class="textt-3xl font-semibo">
              </p>
            </div>
          </div>
        </div>
        <div class="p-5 bg-white rounded-lg shadow-lg swiper-slide">
          <div class="flex items-center gap-5">
            <div class="px-5 text-5xl font-semibold text-center border-x">
              {{ $categories->count() }}
            </div>
            <div class="text-left">
              <h6 class="text-2xl font-semibold text-purple-600">All Categories</h6>
              <a class="text-sm" href="#">Total your making the
                design</a>
              <p class="textt-3xl font-semibo">
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Swiper JS -->
  {{-- SwiperJs --}}
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
           spaceBetween: 20,
           freeMode: true,
           breakpoints: {
             640: {
               slidesPerView: 1,
               spaceBetween: 10,
             },
             768: {
               slidesPerView: 2,
               spaceBetween: 10,
             },
             1024: {
               slidesPerView: 3,
               spaceBetween: 20,
             },
           },
         });
  </script>
</div>
@endsection