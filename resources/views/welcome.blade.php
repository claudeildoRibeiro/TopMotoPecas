<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
    <!-- Styles -->

</head>

<body class="font-sans " style="background-image: url({{ asset('images/background.png') }})">

<!-- Header/Nav -->
    <header class="bg-transparent bg-opacity-80 fixed top-0 left-0 w-full z-50 shadow-lg">
        <div class="max-w-6xl mx-auto flex items-center justify-between px-6 py-4">
           <div class="flex items-center space-x-3">
    <div class="bg-red-500 rounded-full h-10 w-10 p-3 flex items-center justify-center shadow text-white text-2xl font-extrabold border-2 border-white">
        <span class="tracking-tight">TM</span>
    </div>

</div>
            <nav class="space-x-6">
                <a href="#" class="text-gray-200 hover:text-red-500 font-medium transition">Home</a>
                <a href="#" class="text-gray-200 hover:text-red-500 font-medium transition">Produtos</a>
                <a href="#" class="text-gray-200 hover:text-red-500 font-medium transition">Serviços</a>
                <a href="#" class="text-gray-200 hover:text-red-500 font-medium transition">Contato</a>
            </nav>
        </div>
    </header>

    <!-- Section principal -->
    <section class="flex flex-col items-center justify-center min-h-[70vh]">
        <div class="bg-transparent bg-opacity-70 rounded-lg p-10 shadow-lg text-center mt-50">
            <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-lg">
                Bem-vindo à <span class="text-red-600">Top Moto Peças</span>
            </h1>
            <p class="text-lg text-gray-200 my-8">
                As melhores peças e serviços para sua moto, com qualidade e confiança!
            </p>
            <a href="#" class="inline-block bg-red-800 hover:bg-white text-white hover:text-black  font-bold py-3 px-8 rounded transition">
                Iniciar ordem de serviço
            </a>
        </div>
    </section>
</body>

</html>
