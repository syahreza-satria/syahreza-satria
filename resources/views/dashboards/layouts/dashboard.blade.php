<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard 🧑‍💻</title>
    @vite('resources/css/app.css')
    <link rel="shortcut icon" href="{{ asset('icon.png') }}" type="image/x-icon">


    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100..900&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-50 font-primary">
    <section class="grid grid-cols-12">
        {{-- Sidebar --}}
        @include('dashboards.partials.sidebar')

        {{-- Content --}}
        <div class="md:col-span-9 col-span-full">
            {{-- Top Bar --}}
            @include('dashboards.partials.topbar')

            {{-- Main Content --}}
            <div class="p-8">
                @yield('content')
            </div>
        </div>
    </section>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById("preview");

            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove("hidden"); // Tampilkan jika sebelumnya tersembunyi
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>

</html>
