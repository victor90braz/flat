@extends('app')

@section('content')

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">New Card Flat</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-md">
      <form class="space-y-6" action="store" method="POST">
        @csrf
        <div>
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">TITLE</label>
          <div class="mt-2">
            <input id="title" name="title" type="text" autocomplete="current-title" required class="block w-full rounded-md border-0 py-1.5 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <label for="price" class="block text-sm font-medium leading-6 text-gray-900">PRICE</label>
          <div class="mt-2">
            <input id="price" name="price" type="number" step="0.01" autocomplete="current-price" required class="block w-full rounded-md border-0 py-1.5 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <label for="description" class="block text-sm font-medium leading-6 text-gray-900">DESCRIPTION</label>
          <div class="mt-2">
            <textarea name="description" id="description" cols="50" rows="5" class="block w-full rounded-md border-0 py-1.5 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
        </div>

        <div>
          <label for="location" class="block text-sm font-medium leading-6 text-gray-900">LOCATION</label>
          <div class="mt-2">
            <input id="location" name="location" type="text" autocomplete="current-location" required class="block w-full rounded-md border-0 py-1.5 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Cancel?
        <a href="/" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Back to Home Page!</a>
      </p>
    </div>
  </div>

@endsection
