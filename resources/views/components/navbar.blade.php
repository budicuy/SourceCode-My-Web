<nav id="header" class="bg-white shadow navbar" {{ $tittle==='Dasboard' ? 'hidden' : '' }}>
  <div class="container flex flex-wrap items-center justify-between w-full px-2 mx-auto md:px-0">
    <a href="/" class="flex items-center self-center gap-1 text-xl font-bold md:text-2xl">
      <span class="whitespace-nowrap">Flix</span>
      <span class="text-purple-600 whitespace-nowrap">Developer</span>
    </a>
    <button data-collapse-toggle="mobile-menu" type="button"
      class="inline-flex items-center justify-center p-2 ml-3 text-black rounded-full outline-none md:hidden ring-1 ring-black"
      aria-controls="mobile-menu-2" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-menu-button-wide"
        viewBox="0 0 16 16">
        <path
          d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z" />
        <path
          d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
      </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
      <ul
        class="flex flex-col gap-2 p-4 mt-4 border border-gray-100 rounded-lg md:gap-0 md:justify-center md:items-center bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent">
        <li class="nav-link">
          <a href="/" class="{{ $tittle === 'Home' ? 'active' : '' }}">Home</a>
        </li>

        <li>
          <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" {{-- Jika tittle sama dengan Project
            atau Design atau Service tambahkan class active Jika Tidak maka Kosong --}}
            class="explore-list {{ $tittle === 'Project' || $tittle === 'Design' || $tittle === 'Service' ? 'active' : '' }}">Explore
            <svg class="w-5 h-5 ml-1 fill-current" aria-hidden="true" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          {{-- Dropdown menu --}}
          <div id="dropdownNavbar" class="z-10 hidden divide-y divide-gray-100 rounded shadow bg-slate-900 w-44"
            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
            <ul class="py-2 text-sm text-white" aria-labelledby="dropdownLargeButton">
              <li>
                <a href=" /design" class="dropdown-list">
                  <span class="{{ $tittle === 'Design' ? 'active' : '' }}">Design</span>
                </a>
              </li>
              <li>
                <a href="/project" class="dropdown-list">
                  <span class="{{ $tittle === 'Project' ? 'active' : '' }}">My Project</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-link">
          <a href="/about" class="{{ $tittle === 'About' ? 'active' : '' }}">About</a>
        </li>
        <li class="nav-link">
          <a href="/contact" class="{{ $tittle === 'Contact' ? 'active' : '' }}">Contact</a>
        </li>
        <hr class="my-2 border-t-2 border-black md:hidden">
        <a href="/"
          class="block py-2 pl-3 pr-4 text-center text-white bg-purple-600 rounded lg:text-xl md:hover:bg-purple-600 md:border-0 drop-shadow-md hover:opacity-50">Collaborate</a>
        </li>
      </ul>
    </div>
  </div>
</nav>