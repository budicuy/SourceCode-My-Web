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

<body class="bg-gray-100">
 @include('components.navbar')
 <main class="mx-auto">
  @yield('content')
  {{-- @include('components.loader') --}}
 </main>
 @include('components.footer')
 @vite('resources/js/app.js')
 {{-- Aos Animation --}}
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 @vite('resources/js/main.js')
 {{-- SwiperJs --}}
 <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</body>

</html>
