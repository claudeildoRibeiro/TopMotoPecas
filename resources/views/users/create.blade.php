<!-- filepath: resources/views/auth/register.blade.php -->
@extends('layout.main_layout')

@section('content')
<div class="min-h-screen flex items-center justify-center ">
    <div class="bg-white opacity-90 rounded-lg shadow-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-red-800 mb-6 uppercase">Criar Novo Usuário</h2>
        <form action="{{ route('users.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nome</label>
                <input type="text" name="name" id="name" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" />
            </div>

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">E-mail</label>
                <input type="email" name="email" id="email" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" />
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Senha</label>
                <input type="password" name="password" id="password" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" />
            </div>

            <div>
                <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirme a Senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" />
            </div>

            <div>
                <label for="address" class="block text-gray-700 font-semibold mb-2">Endereço</label>
                <input type="text" name="address" id="address"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" />
            </div>

            <div>
                <label for="phone_number" class="block text-gray-700 font-semibold mb-2">Telefone</label>
                <input type="text" name="phone_number" id="phone_number"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" />
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-4 rounded transition">
                    Cadastrar
                </button>
            </div>
        </form>
    </div>
</div>
