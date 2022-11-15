@extends('layout.main')
@section('css')
@vite('resources/css/contact.css')
@endsection

@section('content')
<section class="md:px-3 md:py-5 bg-2">
  <div class="container p-5 bg-white md:p-20 md:rounded-lg">
    <div class="grid gap-10 rounded-lg md:grid-cols-2">
      <div class="mt-20 rounded-lg md:mt-0 form-bg">
        <form class="relative w-full p-5 mt-6 space-y-8 md:p-10 ">
          <div
            class="absolute w-24 h-24 overflow-hidden -translate-x-1/2 -translate-y-24 bg-blue-700 border-4 border-white rounded-full md:-translate-y-32 md:w-32 md:h-32 aspect-square left-1/2">
            <img src="img/me.jpg" alt="MyPhoto">
          </div>
          <div class="relative">
            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white rounded-t-lg">First Name
              <span class="text-red-600">*</span>
            </label>
            <input required type="text" name="FirstName"
              class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
              placeholder="John">
          </div>
          <div class="relative">
            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white rounded-t-lg">Last Name
              <span class="text-red-600">*</span>
            </label>
            <input required name="LastName" type="text"
              class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
              placeholder="Doe">
          </div>
          <div class="relative">
            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white rounded-t-lg">Email Address
              <span class="text-red-600">*</span>
            </label>
            <input required type="email" name="email"
              class="block w-full px-4 py-4 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
              placeholder="example@email.com">
          </div>
          <div class="relative">
            <label class="absolute px-2 ml-2 -mt-3 font-medium text-gray-600 bg-white rounded-t-lg">Message
              <span class="text-red-600">*</span>
            </label>
            <textarea required type="text" name="message"
              class="block w-full px-4 min-h-[150px] mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:border-black"
              placeholder=". . . . . . . . . . . . . ">
            </textarea>
          </div>
          <div class="relative">
            <button
              class="inline-block w-full px-5 py-4 text-xl font-medium text-center text-white transition duration-200 bg-purple-500 rounded-lg hover:bg-purple-300 ease">Submit</button>
          </div>
        </form>
      </div>
      <div>
        <h4 class="mb-3 text-3xl font-bold md:text-4xl text-black/80">Contact me</h4>
        <p class="mb-3 text-base md:text-lg">
          Contact me online here, if you have any questions or want a consultation. I will respond immediately.
          Thank you
        </p>
        <div class="relative flex items-center gap-5 mb-3 flex-nowrap">
          <span class="text-base font-bold md:text-lg  w-[40%] md:w-[30%] slap">Information</span>
          <hr class="border-black border-t-4 rounded-xl w-[60%] md:w-[70%]">
        </div>
        <ul>
          <li class="mb-3">
            <span class="text-sm font-semibold md:text-base">Email:</span>
            <a href="mailto:budibudiannor90@gmail.com"
              class="text-blue-500 hover:underline">budibudiannor90@gmail.com</a>
          </li>
          <li class="mb-3">
            <span class="text-sm font-semibold md:text-base">Phone:</span>
            <a href="tel:6289503399353" class="text-blue-500 hover:underline">+62-8950-3399-353</a>
          </li>
          <li class="mb-3">
            <span class="text-sm font-semibold md:text-base">Address:</span>
            <span class="text-blue-500 hover:underline">Indonesian, South Kalimantan, Banjarmasin 70123</span>
          </li>
        </ul>
        <div class="relative flex items-center gap-5 mb-3 flex-nowrap">
          <span class="text-base font-bold slap md:text-lg w-[40%] md:w-[30%]">Google Maps</span>
          <hr class="border-black border-t-4 rounded-xl w-[60%] md:w-[70%]">
        </div>
        <div class="mb-3 overflow-hidden rounded-lg">
          <iframe class="w-full min-h-[200px] rounded-lg"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.8022144127902!2d114.59556512916558!3d-3.298406060966583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd929c2d758211644!2zM8KwMTcnNTQuMyJTIDExNMKwMzUnNDYuMCJF!5e0!3m2!1sid!2sid!4v1666612370552!5m2!1sid!2sid"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
        <div class="relative flex items-center gap-5 mb-3 flex-nowrap">
          <span class="text-base font-bold md:text-lg slap w-[40%] md:w-[30%]">Social Media</span>
          <hr class="border-black border-t-4 rounded-xl w-[60%] md:w-[70%]">
        </div>
        <div class="flex items-center gap-2 mt-3 md:gap-3 ">
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
      </div>
    </div>
  </div>
</section>
@endsection