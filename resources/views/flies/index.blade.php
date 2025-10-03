@extends('layouts.main')

@section('title','Veja as sugestões de outros colaboradores')

@section('content')
<div class="mt-5">
    <h1 class="text-2xl text-center font-bold mb-4 text-green-600">Veja as sugestões de outros colaboradores</h1>
    <div class="mb-6 p-10 rounded-2xl shadow-2xl bg-gray-100 pb-4 max-w-5xl mx-auto flex items-center justify-center">
        <p class="text-lg text-green-700 break-words">
            Aqui estão as sugestões enviadas por outros colaboradores. Sinta-se à vontade para navegar, avaliar e comentar nas ideias que achar interessantes!
        </p>
        @foreach ($flies as $fly )
        

                    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$fly->title}}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ver mais 
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
</div>

            
        @endforeach
    </div>
</div>
<div class="container mx-auto p-4"> 

@endsection