@extends('app')

@section('content')

<div class="flex min-h-full flex-col justify-center px-2 py-8 lg:px-8">

    @if(session('success'))
        <div id="success-message"
            class="fixed bottom-0 right-0 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 z-50">
            <p>{{ session('success') }}</p>
        </div>
        @push('scripts')
            <script>
                setTimeout(function () {
                    document.getElementById('success-message').style.display = 'none';
                }, 2000);
            </script>
        @endpush
    @endif

    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Edit User Profile</h2>
    </div>

    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <form class="space-y-6" action="{{ route('user.update', ['user' => $user]) }}" method="POST">
            @csrf
            @method('PATCH')

            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                Name
            </label>
            <div class="mt-2">
                <input id="name" name="name" type="text" value="{{$user->name}}" required class="block w-full p-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                Email
            </label>
            <div class="mt-2">
                <input id="email" name="email" type="email" value="{{$user->email}}" required class="block w-full p-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">
                Password
            </label>
            <div class="mt-2">
                <input id="password" name="password" type="password" value="{{$user->password}}" required class="block w-full p-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
