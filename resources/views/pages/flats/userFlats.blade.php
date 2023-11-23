@php
    /** @var \Illuminate\Database\Eloquent\Collection<int, \App\Models\Flat> $flats */
@endphp

@extends('app')

@section('content')
    <h2 class="text-2xl font-bold mb-4 ml-4">My Flats</h2>

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
        <p class="ml-4">No flats found.</p>
    @endif
@endsection
