@extends('app')

@section('content')
    <div class="bg-white shadow-md rounded-lg overflow-hidden p-2 ml-4 mr-4 mb-2 mt-2">
        <h1 class="text-2xl font-semibold mb-4">Check Flat Details</h1>

        <div class="mb-4">
            <p class="text-lg font-semibold">{{ $flat->title }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600">$ {{ $flat->price }}/monthly</p>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600 mb-2" for="description">Description:</label>
            <textarea name="description" id="description" cols="30" rows="5" class="w-full border rounded-md p-2" readonly>{{ $flat->description }}</textarea>
        </div>

        <div class="mb-4">
            <p class="text-gray-700">{{ $flat->location }}</p>
        </div>
    </div>
@endsection




