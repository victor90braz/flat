<h2>id = {{$user->id}}</h2>

<form action="{{route('user.store')}}" method="POST">
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
        <input id="password" name="password" type="password" required class="block w-full p-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>

    <button type="submit" class="mt-1 text-xs leading-5 text-gray-500">Update</button>
</form>
