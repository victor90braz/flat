@extends('app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <ul class="grid grid-cols-[repeat(auto-fill,minmax(300px,1fr))] gap-4">

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
    </div>
@endsection
