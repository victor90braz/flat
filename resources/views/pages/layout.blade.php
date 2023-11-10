@extends('app')

@section('content')
    @if(session('success'))
        <div class="mt-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <header class="bg-blue-500 text-white p-4 shadow-md">
        <h1 class="text-center text-4xl font-bold mb-6">Welcome to <span class="text-red-600">Flats</span> Platform</h1>

        <section>
            <p class="text-lg font-semibold">Explore Flats' Offerings</p>
            <p>Join now to become a member and unlock exclusive benefits!</p>
            <p>Whether you're seeking comfort, style, or modern living, we have the perfect flats waiting for you.  </p>
        </section>

        <nav class="mt-4">
            <a href="register" class="inline-block bg-white text-blue-500 px-4 py-2 rounded-md mr-4">Register</a>
            <a href="login" class="inline-block bg-white text-blue-500 px-4 py-2 rounded-md">Login</a>
        </nav>
    </header>

    <main>
        <ul class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-4 mt-6">
            @foreach ($flats as $flat)
                <li>
                    @include('components.flat.template', [
                        'flat' => $flat
                    ])
                </li>
            @endforeach
        </ul>
    </main>
@endsection
