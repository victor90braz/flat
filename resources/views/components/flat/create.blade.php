@extends('app')

@section('content')

<div class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="bg-white w- max-w-md p-6 rounded shadow-md">

        <h2 class="text-2xl font-semibold mb-4">Create New Flat</h2>

        <form action="store" method="post">

            @csrf

            <div class="mb-3">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" placeholder="Add Title" class="form-input" required />
            </div>

            <div class="mb-3">
                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                <input type="text" name="price" placeholder="Add Price" class="form-input" required />
            </div>

            <div class="mb-3">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" placeholder="Add Description" class="form-textarea" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                <input type="text" name="location" placeholder="Add Location" class="form-input" required />
            </div>

            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded">
                Create Flat
            </button>

        </form>
    </div>
</div>

@endsection
