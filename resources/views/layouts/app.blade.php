<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://seeklogo.com/images/R/risingwave-icon-logo-837E37238C-seeklogo.com.png"
          type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Flat</title>
</head>
<body>

@include('layouts.components.navigation')

@yield('content')

@stack('scripts')

</body>
</html>
