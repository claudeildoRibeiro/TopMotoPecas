<!-- filepath: resources/views/users/index.blade.php -->
@extends('layout.main_layout')

@section('content')
<div class="max-w-5xl mx-auto mt-24 mb-10 px-2">
    <div class="bg-white bg-opacity-95 rounded-lg shadow-lg p-4 md:p-8">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6 gap-4">
            <h1 class="text-xl md:text-2xl font-bold text-red-800 uppercase">Usuários Cadastrados</h1>
            <a href="{{ route('users.create') }}" class="bg-red-700 hover:bg-red-800 text-white font-bold py-2 px-4 rounded transition text-center">
                Novo Usuário
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded shadow text-xs md:text-sm">
                <thead>
                    <tr>
                        <th class="px-2 md:px-4 py-2 border-b text-left text-gray-700">Nome</th>

                        <th class="px-2 md:px-4 py-2 border-b text-left text-gray-700">Perfil</th>
                        <th class="px-2 md:px-4 py-2 border-b text-left text-gray-700">Status</th>
                        <th class="px-2 md:px-4 py-2 border-b text-left text-gray-700">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr class="hover:bg-red-50">
                            <td class="px-2 md:px-4 py-2 border-b">{{ $user->name }}</td>

                            <td class="px-2 md:px-4 py-2 border-b">
                                @if($user->is_admin)
                                    <span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded text-xs font-semibold">Admin</span>
                                @else
                                    <span class="bg-blue-200 text-blue-800 px-2 py-1 rounded text-xs font-semibold">Usuário</span>
                                @endif
                            </td>
                            <td class="px-2 md:px-4 py-2 border-b">
                                @if($user->is_active)
                                    <span class="bg-green-200 text-green-800 px-2 py-1 rounded text-xs font-semibold">Ativo</span>
                                @else
                                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded text-xs font-semibold">Inativo</span>
                                @endif
                            </td>
                            <td class="px-2 md:px-4 py-2 border-b flex flex-col md:flex-row gap-2">
                                <a href="{{ route('users.show', Crypt::encrypt($user->id)) }}" class="text-blue-600 hover:text-blue-800" title="Ver usuário">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0c0 5-9 9-9 9s-9-4-9-9a9 9 0 0118 0z" />
                                    </svg>
                                </a>
                                <a href="{{ route('users.edit', Crypt::encrypt($user->id)) }}" class="text-yellow-600 hover:text-yellow-800" title="Editar usuário">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6.586-6.586a2 2 0 112.828 2.828L11.828 15.828a2 2 0 01-1.414.586H7v-3a2 2 0 01.586-1.414z" />
                                    </svg>
                                </a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" title="Excluir usuário">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="inline w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-6 text-center text-gray-500">Nenhum usuário cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
