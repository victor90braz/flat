@extends('app')

@section('content')

    <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
        <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
          <img src="https://plus.unsplash.com/premium_photo-1680100256112-2e1231d9d0df?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
        </div>
        <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
          <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
            <img src="https://plus.unsplash.com/premium_photo-1680100256112-2e1231d9d0df?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
          </div>
          <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
            <img src="https://plus.unsplash.com/premium_photo-1680100256112-2e1231d9d0df?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
          </div>
        </div>
        <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
          <img src="https://plus.unsplash.com/premium_photo-1680100256112-2e1231d9d0df?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Model wearing plain white basic tee." class="h-full w-full object-cover object-center">
        </div>
    </div>

    <div class="flex flex-col bg-white shadow-md rounded-lg overflow-hidden p-4 ml-4 mr-4 mb-2 mt-4">

        <header class="navbar bg-base-300 rounded-box">
            <div class="flex-1 px-2 lg:flex-none">
                <h1 class="text-2xl font-semibold">{{ ucwords($flat->title) }}</h1>
            </div>

            @auth
                <div class="flex justify-end flex-1 px-2">
                    <div class="flex items-stretch">
                        <div class="dropdown dropdown-end">
                            <label tabindex="0" class="btn btn-ghost rounded-btn">Settings</label>
                            <ul tabindex="0" class="menu dropdown-content z-[1] p-2 shadow bg-base-200 rounded-box w-fit mt-4">
                                <li class="mb-2">
                                    <a href="{{ route('flats.edit', ['flat' => $flat->id]) }}"
                                        class="px-4 py-2 border-2 border-yellow-500 rounded-lg text-yellow-500 hover:bg-yellow-500 hover:text-white">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('flats.delete', ['flat' => $flat->id ]) }}" method="POST"
                                        class="block px-4 py-2 border-2 border-red-500 rounded-lg text-red-500 hover:bg-red-500 hover:text-white">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endauth
        </header>

        <article class="mt-4 border p-4 rounded-lg">
            <div class="mb-4">
                <p class="h-full rounded-md border-0 bg-transparent py-0 pr-7 text-gray-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    EUR {{ $flat->price }}/month
                </p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2" for="description">Description:</label>
                <textarea name="description" id="description" cols="30" rows="5"
                    class="w-full border rounded-md p-2" readonly>{{ $flat->description }}</textarea>
            </div>

            <div class="mb-4">
                <p class="text-gray-700">Location: {{ $flat->location }}</p>
            </div>
        </article>
    </div>

    @include('components.comments.card', ['comments' => $flat->comments, 'flat' => $flat])

@endsection
