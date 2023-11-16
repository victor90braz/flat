@php
/** @var \App\Models\Flat $flat */
@endphp

<div class="bg-white shadow-md rounded-lg overflow-hidden p-4">
    <div class="relative overflow-hidden">
        <img src="https://plus.unsplash.com/premium_photo-1680100256112-2e1231d9d0df?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Spacious City Flat" class="w-full h-64 object-cover object-center rounded-t-lg">
        <div class="absolute inset-0 bg-gradient-to-t from-black opacity-50"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <h2 class="text-white text-3xl font-semibold">{{ $flat->title }}</h2>
        </div>
    </div>
    <div class="p-6">
        <p class="text-gray-600 mb-2">EUR {{ $flat->price }}/month</p>

        <div class="flex items-center">
            <a href="{{ route('flats.view', ['flat' => $flat]) }}" class="text-blue-500 hover:underline mr-4">View Details</a>
            <span class="text-gray-500">Updated {{ now()->diffForHumans($flat->updated_at) }}</span>
        </div>
    </div>
</div>


