<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Syahreza Satria Alfath</title>
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100..900&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">

    {{-- animate --}}
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
</head>

<body class="font-primary text-slate-700">
    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Content --}}
    <section class="max-w-2xl px-4 py-8 mx-auto">
        @yield('content')
    </section>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        var app = document.getElementById('app');

        var typewriter = new Typewriter(app, {
            loop: true
        });

        typewriter.typeString('Hello World!')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Halo Dunia!')
            .pauseFor(2500)
            .deleteAll()
            .typeString('こんにちは世界!')
            .pauseFor(2500)
            .deleteAll()
            .typeString('안녕하세요 세상!')
            .pauseFor(2500)
            .deleteAll()
            .typeString('Привет, мир!')
            .start();
    </script>
</body>

</html>
