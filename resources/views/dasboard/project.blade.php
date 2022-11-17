@extends('layout.dasboard')

@section('css')
@vite('resources/css/dasboard.css')
@endsection
@section('script')
@vite('resources/js/dasboard.js')
@endsection

@section('content')
<section class="mb-10">
  <div class="container gap-10 px-5 pt-5">
    <div class="mb-10">
      <form class="p-5 bg-white rounded-lg shadow" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <h6 class="mb-4 text-3xl font-semibold text-center text-purple-600 uppercase">Insert Project Post</h6>
        <div class="mb-3">
          <label class="block text-xl text-purple-600" for="">Tittle</label>
          <input class="w-full" type="text">
        </div>
        <div class="mb-3">
          <label class="block text-xl text-purple-600" for="">Excerpt</label>
          <input class="w-full" type="text">
        </div>
        <div class="mb-3">
          <label class="block text-xl text-purple-600" for="">Image</label>
          <div class="flex items-center justify-center w-full">
            <label for="dropzone-file"
              class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
              <div class="flex flex-col items-center justify-center pt-5 pb-6">
                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to
                    upload</span> or
                  drag and drop</p>
                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
              </div>
              <input id="dropzone-file" type="file" class="hidden" />
            </label>
          </div>
        </div>
        <div class="mb-3">
          <label class="block text-xl text-purple-600" for="">Dategory</label>
          <select class="w-full">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
          </select class="w-full">
        </div>
        <div class="mb-3">
          <label class="block text-xl text-purple-600" for="">User</label>
          <select class="w-full" name="user_id" id="">
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
          </select class="w-full">
        </div>
        <div class="mb-3">
          <label class="block text-xl text-purple-600" for="">Description</label>
          <textarea class="w-full" type="text"></textarea>
        </div>
        <button class="w-full px-4 py-2 text-white bg-purple-600 rounded-lg" type="submit">
          submit
        </button>
      </form>
    </div>
    <div class="col-span-2 overflow-hidden bg-white rounded-lg shadow">
      <div class="relative">
        <table class="w-full py-5 text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-white uppercase bg-purple-600 ">
            <tr class="text-center">
              <th scope="col" class="p-4">
                <div class="flex items-center">
                  <input id="checkbox-all-search" type="checkbox"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="checkbox-all-search" class="sr-only">checkbox</label>
                </div>
              </th>
              <th scope="col" class="px-6 py-3">
                image
              </th>
              <th scope="col" class="px-6 py-3">
                Tittle
              </th>
              <th scope="col" class="px-6 py-3">
                category
              </th>
              <th scope="col" class="px-6 py-3">
                user
              </th>
              <th scope="col" class="px-6 py-3">
                Excerpt
              </th>
              <th scope="col" class="px-6 py-3">
                Time
              </th>
              <th scope="col" class="px-6 py-3">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            {{-- loop maximal 10 projects --}}
            @foreach ($projects_2 as $project)
            <tr class="text-center bg-white border-b hover:bg-gray-50">
              <td class="w-4 p-4">
                <div class="flex items-center">
                  <input id="checkbox-table-search-1" type="checkbox"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                  <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                </div>
              </td>
              <td class="px-6 py-4">
                <img class="max-w-[100px] mx-auto rounded-full" src="{{ $project->image }}" alt="">
              </td>
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $project->tittle }}
              </th>
              <td class="px-6 py-4">
                {{ $project->category->category_name }}
              </td>
              <td class="px-6 py-4">
                {{ $project->user->name }}
              </td>
              <td class="px-6 py-4">
                {{ Str::limit($project->description, 50) }}...
              </td>
              <td class="px-6 py-4">
                {{ $project->created_at->diffForHumans() }}
              </td>
              <td class="px-6 py-4 ">
                <div class="flex gap-3">
                  <a href="#" class="px-5 py-2 font-medium text-white bg-blue-600 rounded-lg hover:opacity-75">Edit</a>
                  <a href="#" class="px-5 py-2 font-medium text-white bg-red-600 rounded-lg hover:opacity-75">Delete</a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <nav class="flex items-center justify-between px-5 py-4" aria-label="Table navigation">
          <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
              class="font-semibold text-gray-900 dark:text-white">
              total show data
            </span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
          <ul class="inline-flex items-center -space-x-px">
            <li>
              <a href="#"
                class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <span class="sr-only">Previous</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                    clip-rule="evenodd">
                  </path>
                </svg>
              </a>
            </li>
            <li>
              <a href="#"
                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
              <a href="#"
                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
              <a href="#" aria-current="page"
                class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
              <a href="#"
                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
            </li>
            <li>
              <a href="#"
                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
            </li>
            <li>
              <a href="#"
                class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <span class="sr-only">Next</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                    clip-rule="evenodd">
                  </path>
                </svg>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
</section>
@endsection