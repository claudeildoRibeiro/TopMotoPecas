<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

</head>

<body class="font-sans " style="background-image: url({{ asset('images/background.png') }})">

    @include('partials.main_header')

   @yield('content')

    <!-- Footer -->
    <footer class="bg-zinc-900 opacity-60 text-white py-6 mt-10 fixed bottom-0 w-full">
        <div class="max-w-6xl mx-auto text-center">
            <p class="text-sm">© {{ date('Y') }} Top Moto Peças. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>
