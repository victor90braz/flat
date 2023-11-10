@extends('app')

@section('content')
    @php
        $flat = (new App\Models\Flat())->find(1);
    @endphp

    @include('components.flats.detail', [
        'flat' => $flat
    ])
@endsection
