@extends('app')

@section('content')
    <h1 class="text-2xl font-bold mb-4 ml-4">Dashboard</h1>

    <ul class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-4 mt-6">
        @php
            $flats = (new App\Models\Flat())->all();
        @endphp

        @foreach ($flats as $flat)
            <li>
                @include('components.flats.template', [
                    'flat' => $flat
                ])
            </li>
        @endforeach
    </ul>
@endsection
