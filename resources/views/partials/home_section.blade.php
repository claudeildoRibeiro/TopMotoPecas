@extends('layout.main_layout')

@section('content')
    <!-- Section principal -->
    <section class="flex flex-col items-center justify-center min-h-[70vh]">
        <div class="bg-transparent bg-opacity-70 rounded-lg p-10 shadow-lg text-center mt-50">
            <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 drop-shadow-lg uppercase">
                Bem-vindo à <span class="text-red-600">Top Moto Peças</span>
            </h1>
            <p class="text-lg text-gray-200 my-8">
                As melhores peças e serviços para sua moto, com qualidade e confiança!
            </p>
            <a href="{{ route('service.create') }}"
                class="inline-block bg-red-800 hover:bg-white text-white hover:text-black font-bold py-3 px-8 rounded transition shadow-md shadow-yellow-800/70 uppercase text-lg">
                Iniciar ordem de serviço
            </a>
        </div>
    </section>
@endsection


