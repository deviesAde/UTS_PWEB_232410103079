<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Devies Zoo</title>

    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-amber-50 flex flex-col min-h-screen">
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
</body>
</html>
