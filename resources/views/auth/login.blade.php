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

</head>

<body class="font-sans " style="background-image: url({{ asset('images/background.png') }})">

<div class="min-h-screen flex items-center justify-center">
    <div class="bg-white bg-opacity-95 rounded-lg shadow-lg p-8 w-full max-w-md mt-20 mb-10">
        <h2 class="text-2xl font-bold text-center text-red-800 mb-6 uppercase">Insira seus dados de acesso</h2>
        <form action="{{ route('login') }}" method="POST" class="space-y-5" novalidate>
            @csrf

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">E-mail</label>
                <input type="email" name="email" id="email" required
                    class="w-full border border-gray-200 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" value="{{ old('email') }}" />
            </div>
            @error('email')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror

            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Senha</label>
                <input type="password" name="password" id="password" required
                    class="w-full border border-gray-200 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" value="{{ old('password') }}" />
            </div>
            @error('password')
                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror

            <div class="flex items-center justify-between">
                <div>
                    <input type="checkbox" name="remember" id="remember" class="mr-1">
                    <label for="remember" class="text-gray-600 text-sm">Lembrar-me</label>
                </div>
                <a href="{{ route('profile.change-password') }}" class="text-sm text-red-700 hover:underline">Esqueceu a senha?</a>
            </div>
            @error('status')
                <div class="bg-yellow-300 text-black text-sm mt-1 p-2 rounded">{{ $message }}</div>

            @enderror

            <div>
                <button type="submit"
                    class="w-full bg-red-700 hover:bg-red-900 text-white font-bold py-2 px-4 rounded transition cursor-pointer focus:outline-none focus:ring-2 focus:ring-red-700 focus:ring-opacity-50">
                    Entrar
                </button>
                <button type="button"
                    class="w-full bg-gray-700 hover:bg-gray-900 text-white font-bold py-2 px-4 rounded transition cursor-pointer focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-opacity-50 mt-2">
                    <a href="{{ route('home') }}">Desistir</a>
                </button>
            </div>
        </form>
    </div>
</div>
 <!-- Footer -->
    <footer class="bg-zinc-900 opacity-60 text-white py-6 mt-10 fixed bottom-0 w-full">
        <div class="max-w-6xl mx-auto text-center">
            <p class="text-sm">© {{ date('Y') }} Top Moto Peças. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>

</html>
