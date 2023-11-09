@extends('app')

@section('content')
    <div class="container">
        @php
            $flats = range(1, 4);
        @endphp

        @foreach ($flats as $flat)
            <div class="mb-6 w-fit m-2">
                @include('components.flats.template')
            </div>
        @endforeach
    </div>
@endsection
