<!-- filepath: resources/views/admin/dashboard.blade.php -->
@extends('layout.main_layout')

@section('content')
<div class="max-w-5xl mx-auto mt-24 mb-10">
    <div class="bg-white bg-opacity-95 rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold text-red-800 mb-8 text-center uppercase">Painel do Administrador</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Registrar novo usuário -->
            <a href="{{ route('users.create') }}" class="group block bg-red-100 hover:bg-red-200 border border-red-300 rounded-lg p-6 text-center shadow transition">
                <div class="flex justify-center mb-4">
                    <svg class="h-10 w-10 text-red-700 group-hover:text-red-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                </div>
                <span class="text-lg font-semibold text-red-800">Registrar Novo Usuário</span>
                <p class="text-gray-600 text-sm mt-2">Adicione novos administradores ou funcionários ao sistema.</p>
            </a>
            <!-- Cadastrar nova peça -->
            <a href="#" class="group block bg-yellow-100 hover:bg-yellow-200 border border-yellow-300 rounded-lg p-6 text-center shadow transition">
                <div class="flex justify-center mb-4">
                    <svg class="h-10 w-10 text-yellow-700 group-hover:text-yellow-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <span class="text-lg font-semibold text-yellow-800">Cadastrar Peça</span>
                <p class="text-gray-600 text-sm mt-2">Inclua novas peças e atualize o estoque do sistema.</p>
            </a>
            <!-- Outras funcionalidades -->
            <a href="#" class="group block bg-blue-100 hover:bg-blue-200 border border-blue-300 rounded-lg p-6 text-center shadow transition">
                <div class="flex justify-center mb-4">
                    <svg class="h-10 w-10 text-blue-700 group-hover:text-blue-900" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 014-4h4m-6 4v2m0 0h6m-6 0a2 2 0 01-2-2v-2a2 2 0 012-2h4a2 2 0 012 2v2a2 2 0 01-2 2h-6z"/>
                    </svg>
                </div>
                <span class="text-lg font-semibold text-blue-800">Gerenciar Ordens de Serviço</span>
                <p class="text-gray-600 text-sm mt-2">Visualize, edite e acompanhe todas as ordens de serviço.</p>
            </a>
        </div>
        <div class="mt-10 text-center">
            <a href="#" class="inline-block bg-zinc-800 hover:bg-zinc-900 text-white font-bold py-2 px-6 rounded transition">
                Relatórios do Sistema
            </a>
        </div>
    </div>
</div>
@endsection
