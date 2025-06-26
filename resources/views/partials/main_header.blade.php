<!-- Header/Nav -->
<header class="bg-zinc-800  border-b border-yellow-900 fixed top-0 left-0 w-full z-50 shadow-lg">
    <div class="max-w-6xl mx-auto px-6 py-4">
        <div class="flex justify-between items-center space-x-3">
            <div
                class="bg-red-500 rounded-full h-10 w-10 p-3 flex items-center justify-center shadow text-white text-2xl font-extrabold border-2 border-white">
                <span class="tracking-tight">TM</span>
            </div>
            {{-- check if exists session --}}
            @if (session('user')->is_admin ?? false)
                <div class="relative group">
                    <button class="flex items-center text-white font-semibold focus:outline-none">
                        Olá, {{ session('user')->name }}!
                        <svg class="ml-1 h-4 w-4 text-yellow-400" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <!-- Dropdown -->
                    <div
                        class="absolute right-0 mt-2 w-44 bg-white rounded shadow-lg py-2 z-50 opacity-0 invisible group-hover:opacity-100 group-hover:visible hover:opacity-100 hover:visible transition-all duration-200">
                        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-gray-800 hover:text-gray-900 cursor-pointer">Painel Admin</a>
                        <a href="{{ route('profile') }}"
                            class="block px-4 py-2 text-gray-800 hover:text-gray-900 cursor-pointer">Perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-100 flex items-center gap-2 cursor-pointer">
                                <!-- Ícone de logout SVG -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1" />
                                </svg>
                                Sair
                            </button>
                        </form>
                    </div>
                </div>
            @elseif (session('user') )
                <div class="text-white ">
                    Olá, {{ session('user')->name }}!
                </div>
            @else

            @endif

        </div>

    </div>
</header>
