<!-- filepath: resources/views/service_order/create.blade.php -->
@extends('layout.main_layout')

@section('content')
<div class="max-w-xl mx-auto mt-20 bg-red-800 opacity-90 rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-6 text-white text-center uppercase">Nova Ordem de Serviço</h2>
    <form action="#" method="POST" class="space-y-5">
        @csrf

        <!-- Cliente -->
        <div>
            <label for="cliente_id" class="block text-white font-semibold mb-2">Cliente</label>
            <select name="cliente_id" id="cliente_id" class="w-full border border-gray-200 bg-white/90 text-gray-800 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-400" required>
                <option value="" class="text-gray-400">Selecione o cliente</option>
                @foreach($clients as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>

        <!-- Moto -->
        <div>
            <label for="moto_id" class="block text-white font-semibold mb-2">Moto</label>
            <select name="moto_id" id="moto_id" class="w-full border border-gray-200 bg-white/90 text-gray-800 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-400" required>
                <option value="">Selecione a moto</option>
                @foreach($motos as $moto)
                    <option value="{{ $moto->id }}">{{ $moto->modelo }} - {{ $moto->placa }}</option>
                @endforeach
            </select>
        </div>

        <!-- Data -->
        <div>
            <label for="data" class="block text-white font-semibold mb-2">Data</label>
            <input type="date" name="data" id="data" class="w-full border border-gray-200 bg-white/90 text-gray-800 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-400" value="{{ date('Y-m-d') }}" required>
        </div>

        <!-- Status -->
        <div>
            <label for="status" class="block text-white font-semibold mb-2">Status</label>
            <select name="status" id="status" class="w-full border border-gray-200 bg-white/90 text-gray-800 rounded px-3 py-2 focus:ring-blue-500 focus:border-blue-400">
                <option value="aberta" selected>Aberta</option>
                <option value="em andamento">Em Andamento</option>
                <option value="finalizada">Finalizada</option>
            </select>
        </div>

        <div class="flex justify-center">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded shadow cursor-pointer">
                Salvar Ordem de Serviço
            </button>
        </div>
