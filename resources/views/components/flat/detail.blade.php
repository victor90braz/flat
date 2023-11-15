@extends('app')

@section('content')
    <div class="flex flex-col bg-white shadow-md rounded-lg overflow-hidden p-2 ml-4 mr-4 mb-2 mt-2">

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
                                    <a href="{{ url('flat/edit/' . $flat->id) }}"
                                        class="px-4 py-2 border-2 border-yellow-500 rounded-lg text-yellow-500 hover:bg-yellow-500 hover:text-white">
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ url('delete/' . $flat->id) }}" method="POST"
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
                <p class="text-lg font-semibold">{{ ucwords($flat->title) }}</p>
            </div>

            <div class="mb-4">
                <p class="text-gray-600">${{ $flat->price }}/monthly</p>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2" for="description">Description:</label>
                <textarea name="description" id="description" cols="30" rows="5"
                    class="w-full border rounded-md p-2" readonly>{{ $flat->description }}</textarea>
            </div>

            <div class="mb-4">
                <p class="text-gray-700">{{ $flat->location }}</p>
            </div>
        </article>

    </div>
@endsection
