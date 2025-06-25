<!-- filepath: resources/views/service_order/create.blade.php -->
@extends('layout.main_layout')

@section('content')
    <div class="max-w-xl mx-auto mt-30 bg-white opacity-90 rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-6 text-red-800  uppercase text-center ">Nova Ordem de Serviço</h2>
        <form action="#" method="POST" class="space-y-5">
            @csrf

            <!-- Cliente -->
            <div>
                <label for="cliente_id" class="block text-gray-700 font-semibold mb-2">Cliente</label>
                <select name="cliente_id" id="cliente_id"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50">
                    <option value="" class="text-gray-400">Selecione o cliente</option>
                    @foreach ($clients as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Moto -->
            <div>
                <label for="moto_id" class="block text-gray-700 font-semibold mb-2">Moto</label>
                <select name="moto_id" id="moto_id"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50">
                    <option value="">Selecione a moto</option>
                    @foreach ($motos as $moto)
                        <option value="{{ $moto->id }}">{{ $moto->modelo }} - {{ $moto->placa }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Data -->
            <div>
                <label for="data" class="block text-gray-700 font-semibold mb-2">Data</label>
                <input type="date" name="data" id="data"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50"
                    value="{{ date('Y-m-d') }}" required>
            </div>

            <!-- Status -->
            <div>
                <label for="status" class="block text-gray-700 font-semibold mb-2">Status</label>
                <select name="status" id="status"
                    class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-red-700 focus:border-red-700 bg-gray-50">
                    <option value="aberta" selected>Aberta</option>
                    <option value="em andamento">Em Andamento</option>
                    <option value="finalizada">Finalizada</option>
                </select>
            </div>

            <div class="flex justify-center">
                <a href="{{ route('home') }}"
                    class="mr-4 bg-yellow-600 hover:bg-gray-400 text-white font-bold py-2 px-6 rounded shadow">
                    Voltar
                </a>
                <button type="submit"
                    class="bg-red-800 hover:bg-red-700 text-white font-bold py-2 px-6 rounded shadow cursor-pointer">
                    Salvar Ordem de Serviço
                </button>
            </div>
