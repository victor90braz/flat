@extends('app')

@section('content')
    <div class="container">
        @php
            $flats = (new App\Models\Flat())->all();
        @endphp

        @foreach ($flats as $flat)
            <div class="mb-6 w-fit m-2">
                @include('components.flats.template', [
                    'flat' => $flat
                ])
            </div>
        @endforeach
    </div>
@endsection
