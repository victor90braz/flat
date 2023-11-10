<nav class="mx-auto max-w-7xl p-2">
    <div class="relative flex h-16 items-center justify-between">
        <div class="flex flex-shrink-0 items-center">
            <a href="/">
                <img class="h-12 w-auto" src="{{ asset('storage/' . 'images/favicon.png') }}" alt="Logo Company">
            </a>
        </div>

        <div class="hidden sm:block ml-6">
            <div class="flex space-x-4">
                <a href="/" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                <a href="/flats" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Flats</a>
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
            <a href="/" class="block bg-gray-900 text-white rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
            <a href="/flats" class="block bg-gray-900 text-white rounded-md px-3 py-2 text-base font-medium" aria-current="page">Flats</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
