@extends('app')

@section('content')
    <h2 class="text-2xl font-bold mb-4 ml-4">All Flats</h2>

    <ul class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-4 mt-6">
        @php
            $flats = App\Models\Flat::all()->filter(fn ($flat) => $flat->user_id == Auth::user()->id );
        @endphp

        @foreach ($flats as $flat)
            <li>
                @include('components.flat.template', [
                    'flat' => $flat
                ])
            </li>
        @endforeach
    </ul>
@endsection
