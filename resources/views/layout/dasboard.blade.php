<!DOCTYPE html>
<html lang="en" class="scroll-smooth scrol-pt-16">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BUDI | {{ $tittle }}</title>
  @yield('meta')
  {{-- Favicon ico --}}
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
  <link rel="manifest" href="img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  {{-- Primary Meta Tags --}}
  <meta name="title" content="Budicuy | Fullstack Web Developer & Web Designer">
  <meta name="description"
    content="I'm Fullstack developer & UI/UX designer from Indonesia. I usually create content on Github and Figma, take freelance project at WhatsApps, and make Digital Web products. Happy to collaborate with you">
  {{-- Open Graph / Facebook --}}
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://budicuy.my.id/">
  <meta property="og:title" content="Budicuy | Fullstack Web Developer & Web Designer">
  <meta property="og:description"
    content="I'm Fullstack developer & UI/UX designer from Indonesia. I usually create content on Github and Figma, take freelance project at WhatsApps, and make Digital Web products. Happy to collaborate with you">
  <meta property="og:image"
    content="https://ik.imagekit.io/fjqavkr7g6/portofolio/meta.png?updatedAt=1666515858739&ik-s=50c70fbc2dd4684a684070f3cbe106fc2448cab2">
  {{-- Twitter --}}
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://budicuy.my.id/">
  <meta property="twitter:title" content="Budicuy | Fullstack Web Developer & Web Designer">
  <meta property="twitter:description"
    content="I'm Fullstack developer & UI/UX designer from Indonesia. I usually create content on Github and Figma, take freelance project at WhatsApps, and make Digital Web products. Happy to collaborate with you">
  <meta property="twitter:image"
    content="https://ik.imagekit.io/fjqavkr7g6/portofolio/meta.png?updatedAt=1666515858739&ik-s=50c70fbc2dd4684a684070f3cbe106fc2448cab2">
  @yield('link')
  {{-- Animation Aos --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  {{-- SwiperJS --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  {{-- Bootstrap Icon --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  {{-- Google Fonts Poppins --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap">
  {{-- Main CSS --}}
  @vite('resources/css/app.css')
  @yield('css')
</head>

<body class="bg-gray-100 ">
  {{-- component --}}
  <div class="" x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
      {{-- Loading screen --}}
      <div x-ref="loading"
        class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-purple-800">
        Loading.....
      </div>
      {{-- Sidebar --}}
      <div class="top-0 bottom-0 z-50 flex flex-shrink-0 transition-all ">
        <div x-show="isSidebarOpen" @click="isSidebarOpen = false"
          class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"></div>
        <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>
        {{-- Mobile bottom bar --}}
        <nav aria-label="Options"
          class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t border-purple-100 sm:hidden shadow-t rounded-t-3xl">
          {{-- Menu button --}}
          <button
            @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
            class="p-2 rounded-lg shadow-md hover:bg-purple-800 hover:text-white focus:outline-none focus:ring focus:ring-purple-600 focus:ring-offset-white focus:ring-offset-2"
            :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-purple-600' : 'text-gray-500 bg-white'">
            <span class="sr-only">Toggle sidebar</span>
            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
          </button>

          {{-- Logo --}}
          <a href="#">
            <img class="w-10 h-auto" src="img/me.jpg" alt="me" />
          </a>

          {{-- User avatar button --}}
          <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
            <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
              class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-purple-600 focus:ring-offset-white focus:ring-offset-2">
              <img class="w-8 h-8 rounded-lg shadow-md" src="img/me.jpg" alt="" />
              <span class="sr-only">User menu</span>
            </button>
            <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false" x-ref="userMenu"
              tabindex="-1"
              class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
              role="menu" aria-orientation="vertical" aria-label="user menu">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your
                Profile</a>

              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
            </div>
          </div>
        </nav>

        {{-- Left mini bar --}}
        <nav aria-label="Options"
          class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-r-2 border-purple-100 shadow-md sm:flex r">
          {{-- Logo --}}

          <div class="flex flex-col items-center flex-1 p-2 space-y-4">
            {{-- Menu button --}}
            <button
              @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
              class="p-2 rounded-lg shadow-md hover:bg-purple-800 hover:text-white focus:outline-none focus:ring focus:ring-purple-600 focus:ring-offset-white focus:ring-offset-2"
              :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-purple-600' : 'text-gray-500 bg-white'">
              <span class="sr-only">Toggle sidebar</span>
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
              </svg>
            </button>
            {{-- Messages button --}}
            <button
              @click="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'messagesTab'"
              class="p-2 rounded-lg shadow-md hover:bg-purple-800 hover:text-white focus:outline-none focus:ring focus:ring-purple-600 focus:ring-offset-white focus:ring-offset-2"
              :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-purple-600' : 'text-gray-500 bg-white'">
              <span class="sr-only">Toggle message panel</span>
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
              </svg>
            </button>
            {{-- Notifications button --}}
            <button
              @click="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'notificationsTab'"
              class="p-2 rounded-lg shadow-md hover:bg-purple-800 hover:text-white focus:outline-none focus:ring focus:ring-purple-600 focus:ring-offset-white focus:ring-offset-2"
              :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white bg-purple-600' : 'text-gray-500 bg-white'">
              <span class="sr-only">Toggle notifications panel</span>
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button>
          </div>

          {{-- User avatar --}}
          <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
            <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
              class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-purple-600 focus:ring-offset-white focus:ring-offset-2">
              <img class="rounded-lg shadow-md aspect-square " src="img/me.jpg" alt="" />
              <span class="sr-only">User menu</span>
            </button>
            <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false" x-ref="userMenu"
              tabindex="-1"
              class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
              role="menu" aria-orientation="vertical" aria-label="user menu">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your
                Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
            </div>
          </div>
        </nav>

        <div x-transition:enter="transform transition-transform duration-300"
          x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
          x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0"
          x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen"
          class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white border-r-2 border-purple-100 sm:left-16 sm:w-72 lg:static lg:w-64">
          <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
            {{-- Logo --}}
            <div class="flex items-center justify-center flex-shrink-0 py-10">
              <a href="#">
                <img class="rounded-full" src="img/me.jpg" width="96" alt="me">
              </a>
            </div>
            {{-- Links --}}
            <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
              <a href="/dasboard"
                class="flex items-center w-full space-x-2  {{ $tittle === 'Dasboard' ? 'text-white bg-purple-600' : 'hover:bg-purple-600 hover:text-white text-purple-600' }} rounded-lg">
                <span aria-hidden="true" class="p-2 rounded-lg group-hover:bg-purple-700 group-hover:text-white">
                  <svg class="w-6 h-6 fill-current" x="0px" y="0px" viewBox="0 0 176.532 176.532">
                    <path
                      d="M152.928,85.912l-59.89-49.406c-2.771-2.287-6.773-2.287-9.545,0l-59.89,49.406
                		c-1.728,1.425-2.728,3.546-2.728,5.785v74.544c0,4.143,3.357,7.5,7.5,7.5h119.779c4.143,0,7.5-3.357,7.5-7.5V91.697
                		C155.656,89.458,154.656,87.337,152.928,85.912z M96.196,158.741H80.336v-41.524h15.859V158.741z M140.656,158.741h-29.46v-49.024
                		c0-4.143-3.357-7.5-7.5-7.5H72.836c-4.143,0-7.5,3.357-7.5,7.5v49.024h-29.46V95.233l52.39-43.219l52.39,43.219V158.741z" />
                    <path d=" M173.72,70.866c-16.706-13.382-32.458-26.178-49.561-40.261
                      c-5.109-4.591-10.479-8.938-15.675-13.144c-5.087-4.118-10.348-8.377-15.201-12.745c-2.854-2.568-7.182-2.568-10.035,0
                      c-4.854,4.368-10.114,8.627-15.201,12.745c-5.195,4.205-10.565,8.553-15.675,13.144C35.27,44.689,19.518,57.484,2.812,70.866
                      c-3.233,2.589-3.755,7.31-1.165,10.542c2.589,3.232,7.311,3.755,10.542,1.165C28.991,69.116,44.829,56.249,62.034,42.08
                      c0.085-0.069,0.168-0.141,0.25-0.215c4.854-4.368,10.114-8.627,15.201-12.745c3.559-2.88,7.199-5.827,10.781-8.873
                      c3.582,3.046,7.223,5.993,10.781,8.873c5.087,4.118,10.348,8.377,15.201,12.745c0.082,0.074,0.165,0.146,0.25,0.215
                      c17.204,14.169,33.043,27.036,49.845,40.493c1.384,1.108,3.039,1.646,4.684,1.646c2.198,0,4.377-0.962,5.858-2.812
                      C177.475,78.176,176.953,73.455,173.72,70.866z" />
                  </svg>
                </span>
                <span>Dasboard</span>
              </a>
              <a href="/dasboard-project"
                class="flex items-center w-full space-x-2  {{ $tittle === 'Dasboard Project' ? 'text-white bg-purple-600' : 'hover:bg-purple-600 hover:text-white  text-purple-600' }} rounded-lg">
                <span aria-hidden="true" class="p-2 rounded-lg group-hover:bg-purple-700 group-hover:text-white">
                  <svg class="w-6 h-6 fill-current" viewBox="0 0 231.087 231.087"
                    xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 231.087 231.087">
                    <path
                      d="m230.042,142.627c-1.871-2.744-5.612-3.452-8.355-1.581l-65.513,44.667-14.55-19.473c-1.526-2.036-4.241-2.977-6.788-2.129-3.185,1.06-4.908,4.501-3.848,7.686l11.908,35.785c0.45,1.33 1.184,2.645 2.18,3.757 3.94,4.401 10.702,4.776 15.104,0.836l.777-.695 68.129-60.985c2.216-1.981 2.676-5.346 0.956-7.868z" />
                    <path
                      d="m120.211,190.676h-108.211v-162.49h158.43v124.823c0,3.313 2.687,6 6,6s6-2.687 6-6v-130.823c0-3.313-2.687-6-6-6h-170.43c-3.313,0-6,2.687-6,6v174.49c0,3.313 2.687,6 6,6h114.211c3.313,0 6-2.687 6-6 0-3.314-2.687-6-6-6z" />
                    <path
                      d="m139.694,53.855h-96.959c-3.313,0-6,2.687-6,6s2.687,6 6,6h96.959c3.313,0 6-2.687 6-6s-2.686-6-6-6z" />
                    <path
                      d="m139.694,79.79h-96.959c-3.313,0-6,2.687-6,6s2.687,6 6,6h96.959c3.313,0 6-2.687 6-6s-2.686-6-6-6z" />
                    <path
                      d="m139.694,105.725h-96.959c-3.313,0-6,2.687-6,6s2.687,6 6,6h96.959c3.313,0 6-2.687 6-6s-2.686-6-6-6z" />
                    <path
                      d="m145.694,137.659c0-3.313-2.687-6-6-6h-96.959c-3.313,0-6,2.687-6,6s2.687,6 6,6h96.959c3.314,0 6-2.686 6-6z" />
                    <path
                      d="M42.735,156.329c-3.313,0-6,2.687-6,6s2.687,6,6,6h48.479c3.313,0,6-2.687,6-6s-2.687-6-6-6H42.735z" />
                  </svg>
                </span>
                <span>Project</span>
              </a>
              <a href="/dasboard-design"
                class="flex items-center w-full space-x-2  {{ $tittle === 'Apaan Tuh??' ? 'text-white bg-purple-600' : 'hover:bg-purple-600 hover:text-white  text-purple-600' }} rounded-lg">
                <span aria-hidden="true" class="p-2 rounded-lg group-hover:bg-purple-700 group-hover:text-white">
                  <svg class="w-6 h-6 fill-current" version="1.1" id="Uploaded to svgrepo.com"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                    <path class="blueprint_een" d="M8,9H4v3h4V9z M7,11H5v-1h2V11z M8,13H4v3h4V13z M7,15H5v-1h2V15z M6,17c-1.657,0-3,1.343-3,3
                  	s1.343,3,3,3s3-1.343,3-3S7.657,17,6,17z M6,22c-1.103,0-2-0.897-2-2c0-1.103,0.897-2,2-2s2,0.897,2,2C8,21.103,7.103,22,6,22z
                  	M21.646,11.646l0.707,0.707l-2,2l-0.707-0.707L21.646,11.646z M31,4h-1.586l-1.707-1.707c-0.391-0.391-1.023-0.391-1.414,0
                  	L24.586,4H1C0.448,4,0,4.448,0,5v22c0,0.552,0.448,1,1,1h30c0.552,0,1-0.448,1-1V5C32,4.448,31.552,4,31,4z M16,14v4h4l8-8v13H11V9
                  	h10L16,14z M17,14.707L19.293,17H17V14.707z M20.146,16.439l-2.586-2.586L27,4.414L29.586,7L20.146,16.439z M2,26V6h22l-2,2H10v16
                  	h19V9l1-1v18H2z" />
                  </svg>
                </span>
                <span>Design</span>
              </a>
              <a href="#"
                class="flex items-center w-full space-x-2  {{ $tittle === 'Apaan Tuh??' ? 'text-white bg-purple-600' : 'hover:bg-purple-600 hover:text-white  text-purple-600' }} rounded-lg">
                <span aria-hidden="true" class="p-2 rounded-lg group-hover:bg-purple-700 group-hover:text-white">
                  <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                    <path
                      d="M2 6.47762C2 5.1008 2 4.4124 2.22168 3.86821C2.52645 3.12007 3.12007 2.52645 3.86821 2.22168C4.4124 2 5.1008 2 6.47762 2V2C7.85443 2 8.54284 2 9.08702 2.22168C9.83517 2.52645 10.4288 3.12007 10.7336 3.86821C10.9552 4.4124 10.9552 5.1008 10.9552 6.47762V6.47762C10.9552 7.85443 10.9552 8.54284 10.7336 9.08702C10.4288 9.83517 9.83517 10.4288 9.08702 10.7336C8.54284 10.9552 7.85443 10.9552 6.47762 10.9552V10.9552C5.1008 10.9552 4.4124 10.9552 3.86821 10.7336C3.12007 10.4288 2.52645 9.83517 2.22168 9.08702C2 8.54284 2 7.85443 2 6.47762V6.47762Z"
                      class="fill-current" />
                    <path
                      d="M2 17.5224C2 16.1456 2 15.4572 2.22168 14.913C2.52645 14.1649 3.12007 13.5712 3.86821 13.2665C4.4124 13.0448 5.1008 13.0448 6.47762 13.0448V13.0448C7.85443 13.0448 8.54284 13.0448 9.08702 13.2665C9.83517 13.5712 10.4288 14.1649 10.7336 14.913C10.9552 15.4572 10.9552 16.1456 10.9552 17.5224V17.5224C10.9552 18.8992 10.9552 19.5876 10.7336 20.1318C10.4288 20.88 9.83517 21.4736 9.08702 21.7783C8.54284 22 7.85443 22 6.47762 22V22C5.1008 22 4.4124 22 3.86821 21.7783C3.12007 21.4736 2.52645 20.88 2.22168 20.1318C2 19.5876 2 18.8992 2 17.5224V17.5224Z"
                      class="fill-current" />
                    <path
                      d="M13.0449 17.5224C13.0449 16.1456 13.0449 15.4572 13.2666 14.913C13.5714 14.1649 14.165 13.5712 14.9131 13.2665C15.4573 13.0448 16.1457 13.0448 17.5225 13.0448V13.0448C18.8994 13.0448 19.5878 13.0448 20.1319 13.2665C20.8801 13.5712 21.4737 14.1649 21.7785 14.913C22.0002 15.4572 22.0002 16.1456 22.0002 17.5224V17.5224C22.0002 18.8992 22.0002 19.5876 21.7785 20.1318C21.4737 20.88 20.8801 21.4736 20.1319 21.7783C19.5878 22 18.8994 22 17.5225 22V22C16.1457 22 15.4573 22 14.9131 21.7783C14.165 21.4736 13.5714 20.88 13.2666 20.1318C13.0449 19.5876 13.0449 18.8992 13.0449 17.5224V17.5224Z"
                      class="fill-current" />
                    <path clip-rule="evenodd"
                      d="M16.7725 9.47766C16.7725 9.89187 17.1082 10.2277 17.5225 10.2277C17.9367 10.2277 18.2725 9.89187 18.2725 9.47766V7.22766H20.5225C20.9367 7.22766 21.2725 6.89187 21.2725 6.47766C21.2725 6.06345 20.9367 5.72766 20.5225 5.72766H18.2725V3.47766C18.2725 3.06345 17.9367 2.72766 17.5225 2.72766C17.1082 2.72766 16.7725 3.06345 16.7725 3.47766L16.7725 5.72766H14.5225C14.1082 5.72766 13.7725 6.06345 13.7725 6.47766C13.7725 6.89187 14.1082 7.22766 14.5225 7.22766H16.7725L16.7725 9.47766Z"
                      class="fill-current" fill-rule="evenodd" />
                  </svg>
                </span>
                <span>Categories</span>
              </a>
              <a href="#"
                class="flex items-center w-full space-x-2  {{ $tittle === 'Apaan Tuh??' ? 'text-white bg-purple-600' : 'hover:bg-purple-600 hover:text-white  text-purple-600' }} rounded-lg">
                <span aria-hidden="true" class="p-2 rounded-lg group-hover:bg-purple-700 group-hover:text-white">
                  <svg class="w-6 h-6 fill-current" x="0px" y="0px" viewBox="0 0 489 489">
                    <path d="M417.4,71.6C371.2,25.4,309.8,0,244.5,0S117.8,25.4,71.6,71.6S0,179.2,0,244.5s25.4,126.7,71.6,172.9S179.2,489,244.5,489
                			s126.7-25.4,172.9-71.6S489,309.8,489,244.5S463.6,117.8,417.4,71.6z M244.5,462C124.6,462,27,364.4,27,244.5S124.6,27,244.5,27
                			S462,124.6,462,244.5S364.4,462,244.5,462z" />
                    <path
                      d="M244.5,203.2c35.1,0,63.6-28.6,63.6-63.6s-28.5-63.7-63.6-63.7s-63.6,28.6-63.6,63.6S209.4,203.2,244.5,203.2z
                			M244.5,102.9c20.2,0,36.6,16.4,36.6,36.6s-16.4,36.6-36.6,36.6s-36.6-16.4-36.6-36.6S224.3,102.9,244.5,102.9z" />
                    <path d="M340.9,280.5c-22.3-32.8-54.7-49.5-96.4-49.5s-74.1,16.6-96.4,49.5c-16.6,24.4-27.2,57.7-31.4,98.7
                			c-0.8,7.4,4.6,14.1,12,14.8c7.4,0.8,14.1-4.6,14.8-12c8.5-82.3,42.5-124,101-124s92.5,41.7,101,124c0.7,6.9,6.6,12.1,13.4,12.1
                			c0.5,0,0.9,0,1.4-0.1c7.4-0.8,12.8-7.4,12-14.8C368.1,338.1,357.5,304.9,340.9,280.5z" />
                  </svg>
                </span>
                <span>User</span>
              </a>
            </div>


          </nav>

          <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
            <h2 class="text-xl">Messages</h2>
          </section>

          <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
            <h2 class="text-xl">Notifications</h2>
          </section>
        </div>
      </div>
      <div class="flex flex-col flex-1">
        <header class="relative flex items-center justify-between flex-shrink-0 p-4 bg-white">
          <form action="#" class="flex-1">
            <!-- Search input -->
            <div class="flex items-center w-full max-w-xl mr-6 focus-within:text-purple-500">
              <label for="searching-nav">
                <div class="p-3 bg-purple-600 rounded-l-md">
                  <svg width="15" height="15" class=" fill-white" x="0px" y="0px" viewBox="0 0 487.95 487.95">
                    <path
                      d="M481.8,453l-140-140.1c27.6-33.1,44.2-75.4,44.2-121.6C386,85.9,299.5,0.2,193.1,0.2S0,86,0,191.4s86.5,191.1,192.9,191.1
                      c45.2,0,86.8-15.5,119.8-41.4l140.5,140.5c8.2,8.2,20.4,8.2,28.6,0C490,473.4,490,461.2,481.8,453z M41,191.4
                      c0-82.8,68.2-150.1,151.9-150.1s151.9,67.3,151.9,150.1s-68.2,150.1-151.9,150.1S41,274.1,41,191.4z" />
                  </svg>
                </div>
              </label>
              <input id="searching-nav" type="text" placeholder="Search" aria-label="Search"
                class="w-full py-2 pl-8 pr-3 text-gray-900 placeholder-gray-500 bg-gray-100 border border-transparent rounded-r-md focus:outline-none focus:bg-white focus:placeholder-gray-400 focus:text-gray-900 focus:shadow focus:border-purple-600 sm:text-sm">
            </div>
          </form>
          <div class="items-center hidden ml-4 sm:flex">
            <button @click="isSettingsPanelOpen = true"
              class="p-2 mr-4 text-white bg-purple-600 rounded-lg shadow-md hover:text-black hover:bg-white focus:bg-white focus:outline-none focus:ring focus:ring-black ">
              <span class="sr-only">Settings</span>
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </button>

            <!-- Github link -->
            <a href="https://github.com/kamona-ui/dashboard-alpine" target="_blank"
              class="p-2 text-white bg-black rounded-lg shadow-md hover:text-gray-200 focus:outline-none focus:ring focus:ring-black focus:ring-offset-gray-100 focus:ring-offset-2">
              <span class="sr-only">github link</span>
              <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z">
                </path>
              </svg>
            </a>
          </div>
          <!-- Mobile sub header button -->
          <button @click="isSubHeaderOpen = !isSubHeaderOpen"
            class="p-2 text-gray-400 bg-white rounded-lg shadow-md sm:hidden hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-gray-100 focus:ring-offset-4">
            <span class="sr-only">More</span>

            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
          </button>
          <!-- Mobile sub header -->
          <div x-transition:enter="transform transition-transform" x-transition:enter-start="translate-y-full opacity-0"
            x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transform transition-transform"
            x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="translate-y-full opacity-0"
            x-show="isSubHeaderOpen" @click.away="isSubHeaderOpen = false"
            class="absolute flex items-center justify-between p-2 bg-white rounded-md shadow-lg sm:hidden top-16 left-5 right-5">
            <!-- Seetings button -->
            <button @click="isSettingsPanelOpen = true; isSubHeaderOpen = false"
              class="p-2 text-gray-400 bg-white rounded-lg shadow-md hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-gray-100 focus:ring-offset-4">
              <span class="sr-only">Settings</span>
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </button>
            <!-- Messages button -->
            <button @click="isSidebarOpen = true; currentSidebarTab = 'messagesTab'; isSubHeaderOpen = false"
              class="p-2 text-gray-400 bg-white rounded-lg shadow-md hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-gray-100 focus:ring-offset-4">
              <span class="sr-only">Toggle message panel</span>
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
              </svg>
            </button>
            <!-- Notifications button -->
            <button @click="isSidebarOpen = true; currentSidebarTab = 'notificationsTab'; isSubHeaderOpen = false"
              class="p-2 text-gray-400 bg-white rounded-lg shadow-md hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-gray-100 focus:ring-offset-4">
              <span class="sr-only">Toggle notifications panel</span>
              <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
              </svg>
            </button>
            <!-- Github link -->
            <a href="https://github.com/kamona-ui/dashboard-alpine" target="_blank"
              class="p-2 text-white bg-black rounded-lg shadow-md hover:text-gray-200 focus:outline-none focus:ring focus:ring-black focus:ring-offset-gray-100 focus:ring-offset-2">
              <span class="sr-only">github link</span>
              <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z">
                </path>
              </svg>
            </a>
          </div>
        </header>
        <div class="w-full max-h-screen overflow-y-scroll">
          {{-- Main --}}
          @yield('content')
          {{-- Content --}}
          </main>
        </div>
      </div>
    </div>

    {{-- Settings Panel --}}
    {{-- Backdrop --}}
    <div x-show="isSettingsPanelOpen" class="fixed inset-0 bg-black bg-opacity-50" @click="isSettingsPanelOpen = false"
      x aria-hidden="true"></div>
    {{-- Panel --}}
    <section x-transition:enter="transform transition-transform duration-300"
      x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
      x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0"
      x-transition:leave-end="translate-x-full" x-show="isSettingsPanelOpen"
      class="fixed inset-y-0 right-0 w-64 bg-white border-l border-purple-100 rounded-l-3xl">
      <div class="px-4 py-8">
        <h2 class="text-lg font-semibold">Settings</h2>
      </div>
    </section>



    <!-- Author links -->
    <div class="fixed flex items-center space-x-4 bottom-20 right-5 sm:bottom-5">
      <a href="https://twitter.com/ak_kamona" target="_blank" class="transition-transform transform hover:scale-125">
        <span class="sr-only">Twitter</span>
        <svg aria-hidden="true" class="w-8 h-8 text-blue-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24">
          <path
            d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z">
          </path>
        </svg>
      </a>
      <a href="https://github.com/Kamona-WD" target="_blank" class="transition-transform transform hover:scale-125">
        <span class="sr-only">Github</span>
        <svg aria-hidden="true" class="w-8 h-8 text-black" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M12.026,2c-5.509,0-9.974,4.465-9.974,9.974c0,4.406,2.857,8.145,6.821,9.465 c0.499,0.09,0.679-0.217,0.679-0.481c0-0.237-0.008-0.865-0.011-1.696c-2.775,0.602-3.361-1.338-3.361-1.338 c-0.452-1.152-1.107-1.459-1.107-1.459c-0.905-0.619,0.069-0.605,0.069-0.605c1.002,0.07,1.527,1.028,1.527,1.028 c0.89,1.524,2.336,1.084,2.902,0.829c0.091-0.645,0.351-1.085,0.635-1.334c-2.214-0.251-4.542-1.107-4.542-4.93 c0-1.087,0.389-1.979,1.024-2.675c-0.101-0.253-0.446-1.268,0.099-2.64c0,0,0.837-0.269,2.742,1.021 c0.798-0.221,1.649-0.332,2.496-0.336c0.849,0.004,1.701,0.115,2.496,0.336c1.906-1.291,2.742-1.021,2.742-1.021 c0.545,1.372,0.203,2.387,0.099,2.64c0.64,0.696,1.024,1.587,1.024,2.675c0,3.833-2.33,4.675-4.552,4.922 c0.355,0.308,0.675,0.916,0.675,1.846c0,1.334-0.012,2.41-0.012,2.737c0,0.267,0.178,0.577,0.687,0.479 C19.146,20.115,22,16.379,22,11.974C22,6.465,17.535,2,12.026,2z">
          </path>
        </svg>
      </a>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
  <script>
    const setup = () => {
             return {
             isSidebarOpen: false,
             currentSidebarTab: null,
             isSettingsPanelOpen: false,
             isSubHeaderOpen: false,
             watchScreen() {
                 if (window.innerWidth <= 1024) {
                 this.isSidebarOpen = false
                 }
             },
         }
       }
  </script>
  @yield('script')
  {{-- SwiperJS --}}
  @vite('resources/js/app.js')
  @vite('resources/js/main.js')
  {{-- Aos Animation --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</body>

</html>
