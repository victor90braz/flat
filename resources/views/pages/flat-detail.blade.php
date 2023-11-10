@extends('app')

@section('content')
    <h2 class="text-2xl font-bold mb-4 ml-4">Details Flat</h2>

    @php
        $flat = (new App\Models\Flat())->find(1);
    @endphp

    @include('components.flats.detail', [
        'flat' => $flat
    ])
@endsection
