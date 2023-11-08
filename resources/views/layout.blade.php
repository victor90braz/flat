<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('storage/images/favicon.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <title>Flat</title>
</head>
<body>
    <nav class="bg-green-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
          <div class="relative flex h-16 items-center justify-between">
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
              <div class="flex flex-shrink-0 items-center">
                <img class="h-8 w-auto" src="{{ asset('storage/' . 'images/favicon.png') }}" alt="Logo Company">
                <h1 class="uppercase">flats</h1>
            </div>
              <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                  <a href="/" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Dashboard</a>
                  <a href="/flats" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Flats</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
</body>
</html>
