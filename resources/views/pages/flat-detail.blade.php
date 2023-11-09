@extends('app')

@section('content')
    <div class="container">
        @php
            $flat = (new App\Models\Flat())->find(1);
        @endphp

        <div class="mb-6 w-fit m-2">
            @include('components.flats.detail', [
                'flat' => $flat
            ])
        </div>
    </div>
@endsection
