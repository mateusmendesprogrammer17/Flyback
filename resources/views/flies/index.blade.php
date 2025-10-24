@extends('layouts.main')

@section('title', 'Veja as sugestões de outros colaboradores')

@section('content')
<div class="mt-5">

    <!-- Link "Nova Fly" no canto superior direito -->
    <div class="flex justify-end mb-4 px-6">
        <a href="{{ route('flies.create',[],false), }}"
           class="inline-flex items-center px-5 py-2 bg-green-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-green-700 transition">
            <svg class="w-4 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-7 7V5"/>
            </svg>
            Nova Fly
        </a>
    </div>

    <!-- Título centralizado -->
    <div class="text-center mb-8 px-6">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-green-600 leading-tight">
            Veja as sugestões de outros colaboradores
        </h1>
    </div>

    <!-- Texto introdutório -->
    <div class="max-w-5xl mx-auto mb-12 px-6 py-8 rounded-3xl shadow-2xl bg-green-50">
        <p class="text-base sm:text-lg text-green-800 break-words text-center max-w-3xl mx-auto">
            Aqui estão as sugestões enviadas por outros colaboradores. Sinta-se à vontade para navegar, avaliar as ideias que achar interessantes ou publicar as suas próprias!
        </p>
    </div>

    <!-- Lista de flies -->
    <div class="overflow-x-auto px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            @if ($flies->count() > 0)
                @foreach ($flies as $fly)
                    <div class="p-6 bg-white border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition dark:bg-gray-800 dark:border-gray-700 flex flex-col justify-between">
                          
                        <!-- Título -->
                        <h5 class="mb-3 text-xl sm:text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-green-600 transition">
                            {{ $fly->title }}
                        </h5>

                        <!-- Descrição resumida -->
                        <p class="mb-5 text-sm sm:text-base font-normal text-gray-700 dark:text-gray-400 min-h-[70px]">
                            {{ Str::limit($fly->description, 100, '...') }}
                        </p>

                        <!-- Botão Ver mais -->
                        <a href="{{ route('flies.show', $fly,false) }}" 
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-700 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 transition mt-auto">
                            Ver mais
                            <svg class="rtl:rotate-180 w-4 h-4 ms-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                @endforeach

                <!-- Paginação centralizada -->
                <div class="mt-8 flex justify-center">
                  {{ $flies->links('pagination::tailwind') }}

                </div>
            @else
                <div class="col-span-full flex justify-center">
                    <p class="mr-10 text-center text-gray-500 text-lg">Nenhuma Fly disponível no momento.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
