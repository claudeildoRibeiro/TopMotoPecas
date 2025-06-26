<!-- filepath: resources/views/auth/register.blade.php -->
@extends('layout.main_layout')

@section('content')
<div class="min-h-screen flex items-center justify-center ">
    <div class="bg-white opacity-95 rounded-lg shadow-lg p-8 w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-red-800 mb-6 uppercase">Editar Usuário</h2>
        <form action="{{ route('users.update', Crypt::encrypt($user->id)) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nome</label>
                <input type="text" name="name" id="name"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" value="{{ old('name', $user->name) }}" />
            </div>
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-2">E-mail</label>
                <input type="email" name="email" id="email"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" value="{{ old('email', $user->email) }}" />
            </div>
            @error('email')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <div>
                <label for="password" class="block text-gray-700 font-semibold mb-2">Senha</label>
                <input type="password" name="password" id="password"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" value="{{ old('password', $user->password) }}" />
            </div>
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <div>
                <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirme a Senha</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" value="{{ old('password_confirmation', $user->password) }}"/>
            </div>
            @error('password_confirmation')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror

            <div>
                <label for="address" class="block text-gray-700 font-semibold mb-2">Endereço</label>
                <input type="text" name="address" id="address"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" value="{{ old('address', $user->address) }}"/>
            </div>
            @error('address')
                <span class="text-red-500 text-sm">{{ $message }}</span>

            @enderror


            <div>
                <label for="phone_number" class="block text-gray-700 font-semibold mb-2">Telefone</label>
                <input type="text" name="phone_number" id="phone_number"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50" value="{{ old('phone_number', $user->phone_number) }}"/>
            </div>
            @error('phone_number')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <div>
                <button type="submit"
                    class="w-full bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-4 rounded transition cursor-pointer">
                    Finalizar Edição
                </button>

            </div>
            <div>
                 <a href="{{ route('admin.dashboard') }}" class="block bg-gray-200 w-full text-center hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded transition">Voltar</a>
            </div>
        </form>
    </div>
</div>
