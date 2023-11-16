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

    <footer>
        @auth
            <form action="/flat/{{ $flat->id }}/comments/" method="POST" class="bg-white border border-gray-200 p-6 rounded-xl m-4">
                @csrf

                <header class="flex flex-col items-center gap-4 p-4 bg-gray-100 rounded-xl shadow-md transition duration-300 hover:shadow-lg">

                    <div class="flex items-center gap-2">
                        <img src="https://i.pravatar.cc/100?img={{ auth()->id() }}" alt="avatar" class="rounded-full">
                        <h3 class="text-xl font-bold">Wants to let a Review?</h3>
                    </div>

                    <div class="flex flex-col items-center mt-4 w-full">
                        <textarea class="w-full p-3 border rounded-md focus:outline-none focus:border-blue-500 resize-none" name="body" id="body" rows="3" placeholder="Share your thoughts..."></textarea>

                        <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 focus:outline-none focus:shadow-outline-blue" type="submit">Post</button>
                    </div>

                </header>
            </form>
        @endauth

        @foreach ($comments as $comment)
            <div class="mt-4 border p-4 bg-blue-200 m-4 rounded-md">
                <article class="flex">
                    <div class="flex flex-col mr-4" style="display: flex; flex-direction: column; align-items: center;">
                        <img src="https://i.pravatar.cc/100?img={{ $comment->user->id }}" alt="avatar" class="rounded-full">

                        <header class="flex flex-col items-center">
                            <h3 class="font-bold">{{ $comment->user->name }}</h3>
                            <p class="text-xs"><time> {{ $comment->created_at->diffForHumans() }}</time></p>
                        </header>
                    </div>

                    <div class="chat chat-start mb-2 mt-2">
                        <div class="chat-bubble mt-4">{{ $comment->body }}</div>
                    </div>
                </article>
            </div>
        @endforeach
    </footer>
@endsection
