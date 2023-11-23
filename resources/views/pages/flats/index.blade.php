@extends('app')

@section('content')
    @if(session('success'))
        <div id="success-message"
             class="fixed bottom-0 right-0 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 z-50">
            <p>{{ session('success') }}</p>
        </div>
        @push('scripts')
            <script>
                setTimeout(function () {
                    document.getElementById('success-message').style.display = 'none';
                }, 2000);
            </script>
        @endpush
    @endif

    <header class="bg-blue-500 text-white p-4 shadow-md">
        <h1 class="text-center text-4xl font-bold mb-6">Welcome to <span class="text-red-600">Flats</span> Platform</h1>

        <section>
            <p class="text-lg font-semibold">Explore Flats' Offerings</p>
            <p>Join now to become a member and unlock exclusive benefits!</p>
            <p>Whether you're seeking comfort, style, or modern living, we have the perfect flats waiting for you. </p>
        </section>

        @guest
            <nav class="mt-4">
                <a href="register" class="inline-block bg-white text-blue-500 px-4 py-2 rounded-md mr-4">Register</a>
                <a href="login" class="inline-block bg-white text-blue-500 px-4 py-2 rounded-md">Login</a>
            </nav>
        @endguest
    </header>

    <main>
        @if ($flats->count() > 0)

            @include('components.search.searchFlat')

            <ul class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-4 mt-6">
                @foreach ($flats as $flat)
                    <li>
                        @include('components.flats.card', [
                            'flat' => $flat
                        ])
                    </li>
                @endforeach
            </ul>

            <div class="mt-4">
                {{ $flats->links() }}
            </div>
        @else
            <p>No flats found.</p>
        @endif
    </main>

@endsection
