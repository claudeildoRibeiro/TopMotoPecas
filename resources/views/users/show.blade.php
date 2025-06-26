<!-- filepath: resources/views/users/show.blade.php -->
@extends('layout.main_layout')

@section('content')
<div class="max-w-xl mx-auto mt-24 mb-10">
    <div class="bg-white bg-opacity-95 rounded-lg shadow-lg p-8">
        <h1 class="text-2xl font-bold text-red-800 mb-6 uppercase text-center">Detalhes do Usuário</h1>
        <div class="space-y-4">
            <div>
                <span class="font-semibold text-gray-700">Nome:</span>
                <span class="ml-2 text-gray-900">{{ $user->name }}</span>
            </div>
            <div>
                <span class="font-semibold text-gray-700">E-mail:</span>
                <span class="ml-2 text-gray-900">{{ $user->email }}</span>
            </div>
            <div>
                <span class="font-semibold text-gray-700">Telefone:</span>
                <span class="ml-2 text-gray-900">{{ $user->phone_number }}</span>
            </div>
            <div>
                <span class="font-semibold text-gray-700">Endereço:</span>
                <span class="ml-2 text-gray-900">{{ $user->address }}</span>
            </div>
            <div>
                <span class="font-semibold text-gray-700">Perfil:</span>
                @if($user->is_admin)
                    <span class="ml-2 bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-xs font-semibold">Admin</span>
                @else
                    <span class="ml-2 bg-blue-200 text-blue-800 px-2 py-1 rounded text-xs font-semibold">Usuário</span>
                @endif
            </div>
            <div>
                <span class="font-semibold text-gray-700">Status:</span>
                @if($user->is_active)
                    <span class="ml-2 bg-green-200 text-green-800 px-2 py-1 rounded text-xs font-semibold">Ativo</span>
                @else
                    <span class="ml-2 bg-gray-200 text-gray-800 px-2 py-1 rounded text-xs font-semibold">Inativo</span>
                @endif
            </div>
        </div>
        <div class="mt-8 flex justify-between">
            <a href="{{ route('users.edit', Crypt::encrypt($user->id)) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded transition">Editar</a>
            <a href="{{ route('showUsers') }}" class="bg-zinc-800 hover:bg-zinc-900 text-white font-bold py-2 px-4 rounded transition">Voltar</a>
        </div>
    </div>
</div>
@endsection
