@extends('layouts.main')

@section('title', 'Bem-vindo ao Flyback')

@section('content')
<div class="text-center">
    <h1 class="text-3xl font-bold mb-4 text-green-600">Bem-vindo ao Flyback!</h1>
    <div class="mb-6 p-10 rounded-2xl shadow-2xl bg-gray-100 pb-4 max-w-5xl mx-auto flex items-center justify-center">
        <p class="text-lg text-green-700 break-words">
            A plataforma que permite que você colabore com suas ideias no sistema acadêmico.
            Veja o vídeo abaixo para aprender como enviar a sua ideia ou como avaliar as ideias de outros colaboradores.
        </p>
    </div>

    <!-- Contêiner responsivo 16:9 -->
    <div class="relative pb-[56.25%] max-w-5xl mx-auto">
        <iframe 
            class="absolute top-0 left-0 w-full h-full"
            src="https://www.youtube.com/embed/6xcP2EneJVA?si=dcOyMaisxmrh4EDK" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen
            referrerpolicy="strict-origin-when-cross-origin"
        ></iframe>
    </div>
</div>
@endsection
