<div class="relative flex h-16 items-center justify-between ml-4 mr-4">
    <form action="#" method="GET">
        @csrf
        <input type="text" name="search" class="rounded-md px-3 py-1.5" placeholder="Find something" value="{{request('search')}}">
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Search
        </button>
    </form>
</div>
