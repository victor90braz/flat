@extends('app')

@section('content')
    <div class="container">
        @php
            $flats = range(1, 4);
        @endphp

        @foreach ($flats as $flat)
            @include('components.flats.template')
        @endforeach
    </div>
@endsection
