<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syahreza Satria Alfath | Login</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100..900&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">

</head>

<body class="bg-gray-100 font-primary">
    {{-- Navbar --}}
    @include('includes.navbar-auth')

    {{-- Content --}}
    <section class="max-w-2xl mx-auto">
        @yield('content')
    </section>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
