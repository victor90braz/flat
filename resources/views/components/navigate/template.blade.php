<nav class="mx-auto max-w-7xl p-2">
    <div class="relative flex h-16 items-center justify-between">
        <div class="flex flex-shrink-0 items-center">
            <a href="/">
                <img class="h-12 w-auto" src="{{ asset('storage/images/favicon.png') }}" alt="Logo Company">
            </a>
            @if(Auth::user())
                <p>Welcome, {{ Auth::user()->name }}</p>
            @endif
        </div>

        <div class="hidden sm:block ml-6">
            <div class="flex space-x-4 items-center">
                <div class="btm-nav">
                    <button class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <a href="/" aria-current="page">Home</a>
                    </button>
                </div>
                @if(Auth::user())
                    <div class="btm-nav">
                        <button class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21h18v-6H3zm0 0H21V9h-3.5M12 3L2 9v12h4v-6h8v6h4V9L12 3z"/>
                            </svg>
                            <a href="/flats" aria-current="page">My Flats</a>
                        </button>
                    </div>

                    <div class="btm-nav">
                        <button class="flex flex-col items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                            <a href="/logout" class="flex items-center text-red-600 hover:text-red-700" aria-current="page">Logout</a>
                        </button>
                    </div>
                @endif
            </div>
        </div>

        <div class="sm:hidden">
            <button id="mobile-menu-button" class="text-gray-500 hover:text-white focus:outline-none focus:text-white">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>

    <div class="hidden sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="/" class="block bg-gray-900 text-white rounded-md px-3 py-2 text-base font-medium hover:bg-gray-700" aria-current="page">Home</a>
            @if(Auth::user())
                <a href="/flats" class="block bg-gray-900 text-white rounded-md px-3 py-2 text-base font-medium hover:bg-gray-700" aria-current="page">My Flats</a>

                <a href="/logout" class="flex items-center text-red-600 hover:text-red-700" aria-current="page">
                    <small>Logout</small>
                </a>
            @endif
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
