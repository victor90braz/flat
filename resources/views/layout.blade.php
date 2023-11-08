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
    <div class="flex justify-center gap-1">
        <h1 class="text-3xl font-bold underline">Flat</h1>
        <img src="{{ asset('storage/' . 'images/favicon.png') }}" alt="favicon" width="50">
    </div>
</body>
</html>
