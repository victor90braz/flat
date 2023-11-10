@extends('app')

@section('content')
    <div class="bg-blue-500 text-white p-4 shadow-md">
        <h1 class="text-center text-4xl font-bold mb-6">Welcome to Flats</h1>

        <p>Welcome to a world where you'll discover the most beautiful flats. Our platform is designed to offer you an exquisite selection, tailored to your preferences.</p>

        <p class="text-lg font-semibold">Explore Flats' Offerings</p>
        <p>Join now to become a member and unlock exclusive benefits! Whether you're seeking comfort, style, or modern living, we have the perfect flats waiting for you.</p>

        <a href="#" class="mt-2 inline-block bg-white text-blue-500 px-4 py-2 rounded-md">Register</a>
        <a href="#" class="mt-2 inline-block bg-white text-blue-500 px-4 py-2 rounded-md">Login</a>
    </div>

    <ul class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-4 mt-6">
        @foreach ($flats as $flat)
            <li>
                @include('components.flat.template', [
                    'flat' => $flat
                ])
            </li>
        @endforeach
    </ul>
@endsection
