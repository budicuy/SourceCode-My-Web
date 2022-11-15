@extends('layout.main')
@section('css')
@vite('resources/css/about.css')
@endsection

@section('content')
{{-- Hero Section --}}
<section class="bg-1 ">
  <div class="container">
    <div class="grid justify-center px-5 py-20 md:px-10 lg:px-44">
      <h1 class="text-4xl font-bold text-center lg:text-5xl text-black/80">About</h1>
      <p class="mt-3 text-center text-slate-600">Make your design with me together.</p>
      <div data-aos="fade-up" class="py-2 pl-2 pr-6 mx-auto my-5 ">
        <img src="img/me.jpg" alt=""
          class="w-32 mx-auto border-2 border-white rounded-full shadow h-w-32 md:w-40 md:h-40 ">
        <p class="mt-2 text-2xl font-bold md:mt-4 lg:mt-5 lg:text-4xl text-black/90">Hello there, i'm
          <b class="text-purple-600">Budi</b>
        </p>
      </div>
      <p class="text-xl text-center md:text-3xl text-slate-600">
        I'm <b class="text-slate-800">UI/UX designer</b> from Indonesia. I usually create content and project on
        <u>Github</u> at the
        <u>Flix Developer</u> team, make products and do freelance projects. Happy to collaborate with you
      </p>
    </div>
  </div>
</section>
{{-- My Journey Life --}}
<section class="">
  <div class="container px-5 py-10">
    <h3
      class="mb-5 text-4xl font-bold text-center text-purple-600 md:text-left md:mb-7 lg:mb-10 md:text-5xl lg:text-6xl">
      My Journey Life</h3>
    <ol class="relative border-l-2 border-gray-200 dark:border-gray-700">
      <div class="mb-10 ml-4">
        <div class="grid items-center grid-cols-1 md:grid-cols-2">
          <div>
            <div
              class="absolute w-3 h-3 bg-purple-600 rounded-full mt-1.5 -left-1.5 border-2 border-white dark:border-gray-900 dark:bg-gray-700">
            </div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">June 2020 - February
              2022</time>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Students of SMK ISFI BANJARMASIN</h3>
            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">
              Memasuki sekolah Menengah Ke atas (SMK) Di jurusan Rekayasa Perangkat lunak, Bertujuan untuk bisa belajar
              membuat
              sebuah digital Product...
            </p>
            {{-- <a href=""
              class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outdivne-none focus:ring-gray-200 focus:text-blue-700">
              Baca Selengkapnya ➜
            </a> --}}
          </div>
          <div class="flex items-center justify-center p-5 md:p-10">
            <img class="rounded-xl" src="https://via.placeholder.com/1600x900" alt="">
          </div>
        </div>
      </div>
      <div class="mb-10 ml-4">
        <div class="grid items-center grid-cols-1 md:grid-cols-2">
          <div>
            <div
              class="absolute w-3 h-3 bg-purple-600 rounded-full mt-1.5 -left-1.5 border-2 border-white dark:border-gray-900 dark:bg-gray-700">
            </div>
            <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">June 2020 - February
              2022</time>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Students of SMP NEGERI 31 BANJARMASIN</h3>
            <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Deskripsion soon...</p>
            {{-- <a href=""
              class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outdivne-none focus:ring-gray-200 focus:text-blue-700">
              Baca Selengkapnya ➜
            </a> --}}
          </div>
          <div class="flex items-center justify-center p-5 md:p-10">
            <img class="rounded-xl" src="https://via.placeholder.com/1600x900" alt="">
          </div>
        </div>
      </div>
    </ol>
  </div>
</section>
{{-- Collaraboration --}}
@include('components.collaboration')
{{-- My Sertificate --}}
<section class="bg-4">
  <div class="container px-5 py-20">
    <h3 class="mb-10 text-4xl font-bold text-center text-white md:text-left md:text-5xl lg:text-6xl">
      Sertificate
    </h3>
    <div class="relative grid grid-cols-2 gap-3 lg:grid-cols-3 md:gap-5">
      <div class="overflow-hidden rounded-lg">
        <a href="http://budicuy.my.id/img/sertificate/sertificate-3.jpeg" target="blank">
          <img loading="lazy" class="object-cover object-center" src="img/sertificate/sertificate-3.jpeg"
            alt="sertficate">
        </a>
      </div>
      <div class="overflow-hidden rounded-lg ">
        <a href="http://budicuy.my.id/img/sertificate/sertificate-4.jpeg" target="blank">
          <img loading="lazy" class="object-cover object-center" src="img/sertificate/sertificate-4.jpeg"
            alt="sertficate">
        </a>
      </div>
      <div class="overflow-hidden rounded-lg">
        <a href="http://budicuy.my.id/img/sertificate/sertificate-5.jpeg" target="blank">
          <img loading="lazy" class="object-cover object-center" src="img/sertificate/sertificate-5.jpeg"
            alt="sertficate">
        </a>
      </div>
      <div class="overflow-hidden rounded-lg">
        <a href="http://budicuy.my.id/img/sertificate/sertificate-6.jpeg" target="blank">
          <img loading="lazy" class="object-cover object-center" src="img/sertificate/sertificate-6.jpeg"
            alt="sertficate">
        </a>
      </div>
      <div class="overflow-hidden rounded-lg">
        <a href="http://budicuy.my.id/img/sertificate/sertificate-2.jpeg" target="blank">
          <img loading="lazy" class="object-cover object-center" src="img/sertificate/sertificate-2.jpeg"
            alt="sertficate">
        </a>
      </div>
      <div class="overflow-hidden rounded-lg">
        <a href="http://budicuy.my.id/img/sertificate/sertificate-1.jpeg" target="blank">
          <img loading="lazy" class="object-cover object-center" src="img/sertificate/sertificate-1.jpeg"
            alt="sertficate">
        </a>
      </div>
    </div>
  </div>
</section>
{{-- My Skill --}}
<section>
  <div class="container px-5 py-20">
    <h3 class="mb-10 text-4xl font-bold text-center text-purple-600 md:text-left md:text-5xl lg:text-6xl">My Experience
    </h3>
    <div class="grid gap-5 md:grid-cols-2 md:gap-0">
      <div>
        <h4 class="mb-2 text-2xl font-bold md:text-3xl text-black/80">Skills Developer</h4>
        <div class="grid grid-cols-2 mt-5 text-sm md:text-xl gap-x-0 gap-y-2">
          <div class="flex items-center gap-3 font-semibold text-blue-500 fill-blue-500">
            <span class="p-3 bg-white border border-blue-500 rounded-full w-11 h-11 md:w-16 md:h-16">
              <svg viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                <title>Tailwind CSS icons</title>
                <path
                  d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z" />
              </svg>
            </span>
            <span>Tailwind CSS</span>
          </div>
          <div class="flex items-center gap-3 font-semibold text-red-600 fill-red-600">
            <span class="p-3 bg-white border border-red-600 rounded-full w-11 h-11 md:w-16 md:h-16">
              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M31.526 7.24c0.010 0.042 0.016 0.089 0.016 0.13v6.87c0 0.177-0.094 0.344-0.25 0.432l-5.766 3.323v6.578c0 0.177-0.094 0.344-0.25 0.432l-12.036 6.927c-0.026 0.016-0.057 0.026-0.089 0.036-0.010 0.005-0.021 0.010-0.031 0.016-0.083 0.021-0.172 0.021-0.255 0-0.016-0.005-0.026-0.010-0.036-0.016-0.031-0.010-0.057-0.021-0.083-0.036l-12.031-6.927c-0.156-0.089-0.255-0.255-0.255-0.432v-20.609c0-0.042 0.010-0.089 0.021-0.13 0.005-0.016 0.010-0.026 0.016-0.042 0.010-0.026 0.021-0.052 0.031-0.078 0.005-0.016 0.021-0.026 0.031-0.042 0.016-0.021 0.031-0.042 0.047-0.063 0.016-0.010 0.031-0.021 0.047-0.036 0.021-0.016 0.036-0.031 0.057-0.042l6.016-3.464c0.156-0.089 0.349-0.089 0.5 0l6.021 3.464c0.021 0.010 0.036 0.026 0.052 0.042 0.016 0.010 0.036 0.026 0.052 0.036 0.016 0.021 0.026 0.036 0.042 0.063 0.010 0.010 0.026 0.026 0.036 0.042 0.010 0.026 0.021 0.052 0.031 0.078 0.005 0.016 0.016 0.026 0.016 0.042 0.016 0.042 0.021 0.083 0.021 0.13v12.87l5.010-2.885v-6.578c0-0.047 0.010-0.089 0.021-0.13 0.005-0.016 0.010-0.031 0.016-0.042 0.010-0.026 0.021-0.052 0.031-0.078 0.010-0.021 0.026-0.031 0.036-0.047 0.016-0.021 0.026-0.042 0.042-0.057s0.036-0.026 0.052-0.036c0.016-0.016 0.031-0.031 0.052-0.042l6.021-3.464c0.151-0.094 0.344-0.094 0.5 0l6.016 3.464c0.021 0.010 0.036 0.026 0.057 0.042 0.016 0.010 0.031 0.021 0.047 0.036s0.031 0.036 0.047 0.057c0.010 0.016 0.026 0.026 0.031 0.047 0.016 0.026 0.021 0.052 0.031 0.078 0.010 0.010 0.016 0.026 0.021 0.042zM30.536 13.948v-5.708l-2.104 1.208-2.906 1.677v5.708zM24.526 24.281v-5.714l-2.865 1.63-8.167 4.667v5.766zM1.458 4.833v19.448l11.031 6.349v-5.766l-5.766-3.266c-0.021-0.010-0.036-0.026-0.052-0.042-0.016-0.010-0.036-0.021-0.047-0.036h-0.005c-0.016-0.016-0.026-0.036-0.042-0.052-0.010-0.016-0.026-0.031-0.036-0.052-0.010-0.016-0.021-0.042-0.026-0.063-0.010-0.021-0.021-0.036-0.026-0.057s-0.010-0.047-0.010-0.073c-0.005-0.021-0.010-0.036-0.010-0.057v-13.448l-2.906-1.677zM6.974 1.078l-5.010 2.885 5.010 2.885 5.010-2.885zM9.583 19.089l2.906-1.677v-12.578l-2.104 1.208-2.911 1.677v12.578zM25.026 4.484l-5.016 2.885 5.016 2.885 5.010-2.885zM24.526 11.125l-5.016-2.885v5.708l2.906 1.677 2.109 1.208zM12.99 23.995l11.026-6.292-5.005-2.885-11.021 6.344z" />
              </svg>
            </span>
            <span>
              Laravel
            </span>
          </div>
          <div class="flex items-center gap-3 font-semibold text-yellow-300 fill-yellow-300">
            <span class="p-3 bg-white border border-yellow-300 rounded-full w-11 h-11 md:w-16 md:h-16">
              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <title>file_type_js</title>
                <path
                  d="M18.774,19.7a3.727,3.727,0,0,0,3.376,2.078c1.418,0,2.324-.709,2.324-1.688,0-1.173-.931-1.589-2.491-2.272l-.856-.367c-2.469-1.052-4.11-2.37-4.11-5.156,0-2.567,1.956-4.52,5.012-4.52A5.058,5.058,0,0,1,26.9,10.52l-2.665,1.711a2.327,2.327,0,0,0-2.2-1.467,1.489,1.489,0,0,0-1.638,1.467c0,1.027.636,1.442,2.1,2.078l.856.366c2.908,1.247,4.549,2.518,4.549,5.376,0,3.081-2.42,4.769-5.671,4.769a6.575,6.575,0,0,1-6.236-3.5ZM6.686,20c.538.954,1.027,1.76,2.2,1.76,1.124,0,1.834-.44,1.834-2.15V7.975h3.422V19.658c0,3.543-2.078,5.156-5.11,5.156A5.312,5.312,0,0,1,3.9,21.688Z" />
              </svg>
            </span>
            <span>
              JavaScript
            </span>
          </div>
          <div class="flex items-center gap-3 font-semibold text-blue-600 fill-blue-600">
            <span class="p-3 bg-white border border-blue-600 rounded-full w-11 h-11 md:w-16 md:h-16">
              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M 16 7.1679688 C 7.165 7.1679688 0 10.932031 0 15.582031 C 0 20.232031 7.165 23.998047 16 23.998047 C 24.835 23.998047 32 20.232031 32 15.582031 C 32 10.932031 24.835 7.1679687 16 7.1679688 z M 16 8.0078125 C 24.57 8.0078125 31.160156 11.617031 31.160156 15.582031 C 31.160156 19.547031 24.565 23.158203 16 23.158203 C 7.43 23.158203 0.83984375 19.547031 0.83984375 15.582031 C 0.83984375 11.617031 7.435 8.0078125 16 8.0078125 z M 14.056641 9.6757812 L 12.439453 18.015625 L 14.244141 18.015625 L 15.175781 13.236328 C 16.644781 13.236328 17.252531 13.177844 17.519531 13.464844 C 17.796531 13.761844 17.654578 14.087625 16.892578 18.015625 L 18.722656 18.015625 C 19.514656 13.954625 19.864812 13.092922 19.132812 12.419922 C 18.435812 11.776922 16.991594 11.890625 15.433594 11.890625 L 15.863281 9.6757812 L 14.056641 9.6757812 z M 6.4882812 11.896484 L 4.8691406 20.242188 L 6.6855469 20.242188 L 7.1152344 18.025391 C 9.1482344 18.025391 10.411125 18.173078 11.578125 17.080078 C 12.869125 15.893078 13.206156 13.780656 12.285156 12.722656 C 11.805156 12.168656 11.032375 11.896484 9.984375 11.896484 L 6.4882812 11.896484 z M 20.679688 11.896484 L 19.058594 20.242188 L 20.878906 20.242188 L 21.308594 18.025391 C 23.445594 18.025391 24.628484 18.149078 25.771484 17.080078 C 27.062484 15.893078 27.399516 13.780656 26.478516 12.722656 C 25.998516 12.168656 25.225734 11.896484 24.177734 11.896484 L 20.679688 11.896484 z M 9.3359375 13.210938 C 10.470781 13.242906 11.120203 13.483203 10.845703 14.908203 C 10.454703 16.912203 9.0759062 16.705078 7.3789062 16.705078 L 8.0566406 13.212891 C 8.5266406 13.212891 8.9576562 13.200281 9.3359375 13.210938 z M 23.529297 13.210938 C 24.665547 13.242906 25.307703 13.483203 25.033203 14.908203 C 24.637203 16.941203 23.218406 16.705078 21.566406 16.705078 L 22.244141 13.212891 C 22.716641 13.212891 23.150547 13.200281 23.529297 13.210938 z" />
              </svg>
            </span>
            <span>
              PHP
            </span>
          </div>
          <div class="flex items-center gap-3 font-semibold text-purple-600 fill-purple-600">
            <span class="p-3 bg-white border border-purple-600 rounded-full md:p-4 w-11 h-11 md:w-16 md:h-16">
              <svg width="32x" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M11.77 11.24H9.956V8.202h2.152c1.17 0 1.834.522 1.834 1.466 0 1.008-.773 1.572-2.174 1.572zm.324 1.206H9.957v3.348h2.231c1.459 0 2.232-.585 2.232-1.685s-.795-1.663-2.326-1.663zM24 11.39v1.218c-1.128.108-1.817.944-2.226 2.268-.407 1.319-.463 2.937-.42 4.186.045 1.3-.968 2.5-2.337 2.5H4.985c-1.37 0-2.383-1.2-2.337-2.5.043-1.249-.013-2.867-.42-4.186-.41-1.324-1.1-2.16-2.228-2.268V11.39c1.128-.108 1.819-.944 2.227-2.268.408-1.319.464-2.937.42-4.186-.045-1.3.968-2.5 2.338-2.5h14.032c1.37 0 2.382 1.2 2.337 2.5-.043 1.249.013 2.867.42 4.186.409 1.324 1.098 2.16 2.226 2.268zm-7.927 2.817c0-1.354-.953-2.333-2.368-2.488v-.057c1.04-.169 1.856-1.135 1.856-2.213 0-1.537-1.213-2.538-3.062-2.538h-4.16v10.172h4.181c2.218 0 3.553-1.086 3.553-2.876z" />
              </svg>
            </span>
            <span>Bootstrap</span>
          </div>
          <div class="flex items-center gap-3 font-semibold text-green-400 fill-green-400">
            <span class="p-3 bg-white border border-green-400 rounded-full w-11 h-11 md:w-16 md:h-16">
              <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="11.245" r="1.785" />
                <path
                  d="m7.002 14.794-.395-.101c-2.934-.741-4.617-2.001-4.617-3.452 0-1.452 1.684-2.711 4.617-3.452l.395-.1.111.391a19.507 19.507 0 0 0 1.136 2.983l.085.178-.085.178c-.46.963-.841 1.961-1.136 2.985l-.111.39zm-.577-6.095c-2.229.628-3.598 1.586-3.598 2.542 0 .954 1.368 1.913 3.598 2.54.273-.868.603-1.717.985-2.54a20.356 20.356 0 0 1-.985-2.542zm10.572 6.095-.11-.392a19.628 19.628 0 0 0-1.137-2.984l-.085-.177.085-.179c.46-.961.839-1.96 1.137-2.984l.11-.39.395.1c2.935.741 4.617 2 4.617 3.453 0 1.452-1.683 2.711-4.617 3.452l-.395.101zm-.41-3.553c.4.866.733 1.718.987 2.54 2.23-.627 3.599-1.586 3.599-2.54 0-.956-1.368-1.913-3.599-2.542a20.683 20.683 0 0 1-.987 2.542z" />
                <path
                  d="m6.419 8.695-.11-.39c-.826-2.908-.576-4.991.687-5.717 1.235-.715 3.222.13 5.303 2.265l.284.292-.284.291a19.718 19.718 0 0 0-2.02 2.474l-.113.162-.196.016a19.646 19.646 0 0 0-3.157.509l-.394.098zm1.582-5.529c-.224 0-.422.049-.589.145-.828.477-.974 2.138-.404 4.38.891-.197 1.79-.338 2.696-.417a21.058 21.058 0 0 1 1.713-2.123c-1.303-1.267-2.533-1.985-3.416-1.985zm7.997 16.984c-1.188 0-2.714-.896-4.298-2.522l-.283-.291.283-.29a19.827 19.827 0 0 0 2.021-2.477l.112-.16.194-.019a19.473 19.473 0 0 0 3.158-.507l.395-.1.111.391c.822 2.906.573 4.992-.688 5.718a1.978 1.978 0 0 1-1.005.257zm-3.415-2.82c1.302 1.267 2.533 1.986 3.415 1.986.225 0 .423-.05.589-.145.829-.478.976-2.142.404-4.384-.89.198-1.79.34-2.698.419a20.526 20.526 0 0 1-1.71 2.124z" />
                <path
                  d="m17.58 8.695-.395-.099a19.477 19.477 0 0 0-3.158-.509l-.194-.017-.112-.162A19.551 19.551 0 0 0 11.7 5.434l-.283-.291.283-.29c2.08-2.134 4.066-2.979 5.303-2.265 1.262.727 1.513 2.81.688 5.717l-.111.39zm-3.287-1.421c.954.085 1.858.228 2.698.417.571-2.242.425-3.903-.404-4.381-.824-.477-2.375.253-4.004 1.841.616.67 1.188 1.378 1.71 2.123zM8.001 20.15a1.983 1.983 0 0 1-1.005-.257c-1.263-.726-1.513-2.811-.688-5.718l.108-.391.395.1c.964.243 2.026.414 3.158.507l.194.019.113.16c.604.878 1.28 1.707 2.02 2.477l.284.29-.284.291c-1.583 1.627-3.109 2.522-4.295 2.522zm-.993-5.362c-.57 2.242-.424 3.906.404 4.384.825.47 2.371-.255 4.005-1.842a21.17 21.17 0 0 1-1.713-2.123 20.692 20.692 0 0 1-2.696-.419z" />
                <path
                  d="M12 15.313c-.687 0-1.392-.029-2.1-.088l-.196-.017-.113-.162a25.697 25.697 0 0 1-1.126-1.769 26.028 26.028 0 0 1-.971-1.859l-.084-.177.084-.179c.299-.632.622-1.252.971-1.858.347-.596.726-1.192 1.126-1.77l.113-.16.196-.018a25.148 25.148 0 0 1 4.198 0l.194.019.113.16a25.136 25.136 0 0 1 2.1 3.628l.083.179-.083.177a24.742 24.742 0 0 1-2.1 3.628l-.113.162-.194.017c-.706.057-1.412.087-2.098.087zm-1.834-.904c1.235.093 2.433.093 3.667 0a24.469 24.469 0 0 0 1.832-3.168 23.916 23.916 0 0 0-1.832-3.168 23.877 23.877 0 0 0-3.667 0 23.743 23.743 0 0 0-1.832 3.168 24.82 24.82 0 0 0 1.832 3.168z" />
              </svg>
            </span>
            <span>
              ReactJS
            </span>
          </div>
          <div class="flex items-center gap-3 font-semibold fill-black/80 text-black/80">
            <span class="p-3 bg-white border rounded-full w-11 h-11 border-black/80 md:w-16 md:h-16">
              <svg viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                <title>Next.js icon</title>
                <path
                  d="M17.813 22.502c-.089.047-.084.066.005.021a.228.228 0 0 0 .07-.047c0-.016-.002-.014-.075.026zm.178-.094c-.042.033-.042.035.009.009.028-.014.052-.03.052-.035 0-.019-.012-.014-.061.026zm.117-.071c-.042.033-.042.035.009.009.028-.014.052-.03.052-.035 0-.019-.012-.014-.061.026zm.117-.07c-.042.033-.042.035.009.009.028-.014.052-.03.052-.035 0-.019-.012-.014-.061.026zm.162-.105c-.082.052-.108.087-.035.047.052-.03.136-.094.122-.096a.466.466 0 0 0-.087.049zM11.214.006c-.052.005-.216.021-.364.033-3.408.307-6.601 2.146-8.623 4.973a11.876 11.876 0 0 0-2.118 5.243c-.096.659-.108.854-.108 1.748s.012 1.088.108 1.748c.652 4.506 3.859 8.292 8.208 9.695.779.251 1.6.422 2.533.525.364.04 1.935.04 2.299 0 1.611-.178 2.977-.577 4.323-1.264.206-.106.246-.134.218-.157a231.73 231.73 0 0 1-1.954-2.62l-1.919-2.592-2.404-3.558a332.01 332.01 0 0 0-2.421-3.556c-.009-.002-.019 1.579-.023 3.509-.007 3.38-.009 3.516-.052 3.596a.424.424 0 0 1-.206.213c-.075.038-.141.045-.495.045H7.81l-.108-.068a.442.442 0 0 1-.157-.171l-.049-.106.005-4.703.007-4.705.073-.091a.637.637 0 0 1 .174-.143c.096-.047.134-.052.54-.052.479 0 .558.019.683.155a466.83 466.83 0 0 1 2.895 4.361c1.558 2.362 3.687 5.587 4.734 7.171l1.9 2.878.096-.063a12.34 12.34 0 0 0 2.465-2.163 11.94 11.94 0 0 0 2.824-6.134c.096-.659.108-.854.108-1.748s-.012-1.088-.108-1.748c-.652-4.506-3.859-8.292-8.208-9.695a12.552 12.552 0 0 0-2.498-.523c-.225-.023-1.776-.049-1.97-.03zm4.912 7.258a.471.471 0 0 1 .237.277c.019.061.023 1.365.019 4.304l-.007 4.218-.744-1.14-.746-1.14v-3.066c0-1.982.009-3.096.023-3.15a.484.484 0 0 1 .232-.296c.096-.049.131-.054.5-.054.347 0 .408.005.486.047z" />
              </svg>
            </span>
            <span>
              NextJS
            </span>
          </div>
        </div>
      </div>
      <div>
        <h4 class="mb-2 text-2xl font-bold md:text-3xl text-black/80">Skills Designer</h4>
        <div class="grid mt-5 text-sm md:text-xl gap-x-0 gap-y-2">
          <div class="flex items-center gap-3 font-semibold text-red-700 fill-red-700">
            <span class="p-3 bg-white border border-red-700 rounded-full w-11 h-11 md:w-16 md:h-16">
              <svg viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M15.852 8.981h-4.588V0h4.588c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.491-4.49 4.491zM12.735 7.51h3.117c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-3.117V7.51zm0 1.471H8.148c-2.476 0-4.49-2.014-4.49-4.49S5.672 0 8.148 0h4.588v8.981zm-4.587-7.51c-1.665 0-3.019 1.355-3.019 3.019s1.354 3.02 3.019 3.02h3.117V1.471H8.148zm4.587 15.019H8.148c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h4.588v8.98zM8.148 8.981c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h3.117V8.981H8.148zM8.172 24c-2.489 0-4.515-2.014-4.515-4.49s2.014-4.49 4.49-4.49h4.588v4.441c0 2.503-2.047 4.539-4.563 4.539zm-.024-7.51a3.023 3.023 0 0 0-3.019 3.019c0 1.665 1.365 3.019 3.044 3.019 1.705 0 3.093-1.376 3.093-3.068v-2.97H8.148zm7.704 0h-.098c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h.098c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.49-4.49 4.49zm-.097-7.509c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h.098c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-.098z" />
              </svg>
            </span>
            <span>Figma</span>
          </div>
          <div class="flex items-center gap-3 font-semibold text-blue-500 fill-blue-500">
            <span class="p-3 bg-white border border-blue-500 rounded-full w-11 h-11 md:p-4 md:w-16 md:h-16">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 243.852 243.852"
                style="enable-background:new 0 0 243.852 243.852;" xml:space="preserve">
                <path id="XMLID_311_"
                  d="M45.213,211.003v-61.364c3.273,0.319,7.133,0.485,11.346,0.485c25.676,0,46.436-6.773,60.043-19.594 c11.146-10.589,17.287-26.365,17.287-44.42c0-17.536-7.334-33.392-20.109-43.494c-12.559-10.045-31.014-14.929-56.42-14.929 c-22.008,0-40.605,1.266-55.279,3.764C0.879,31.654,0,32.696,0,33.915v177.088c0,1.381,1.119,2.5,2.5,2.5h40.213 C44.094,213.503,45.213,212.384,45.213,211.003z M45.213,113.339V64.405c2.455-0.471,7.066-1.094,14.275-1.094 c18.551,0,29.19,8.698,29.19,23.863c0,16.776-12.105,26.793-32.385,26.793C51.428,113.967,47.963,113.775,45.213,113.339z" />
                <path id="XMLID_334_"
                  d="M206.76,129.02c-16.568-5.798-19.363-8.559-19.363-12.553c0-7.093,8.109-8.152,12.945-8.152 c10.268,0,20.979,3.852,27.031,7.15c0.678,0.369,1.484,0.405,2.193,0.098c0.705-0.308,1.232-0.924,1.424-1.67l7.191-27.959 c0.293-1.141-0.25-2.332-1.303-2.858c-7.465-3.732-21.332-7.721-37.869-7.721c-32.674,0-55.494,18.549-55.494,45.065 c-0.221,12.937,6.317,30.649,38.725,41.558c15.742,5.248,17.465,7.975,17.465,12.542c0,2.082,0,8.418-14.809,8.418 c-11.094,0-26.072-4.927-33.588-9.491c-0.682-0.413-1.516-0.478-2.252-0.174c-0.734,0.303-1.281,0.938-1.473,1.71l-7.189,29.028 c-0.274,1.107,0.236,2.258,1.238,2.8c10.998,5.944,26.768,9.354,43.264,9.354c36.365,0,58.955-17.08,58.955-44.608 C243.563,150.866,232.119,137.746,206.76,129.02z" />
              </svg>
            </span>
            <span>Photoshop</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
