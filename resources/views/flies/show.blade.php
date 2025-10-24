@extends('layouts.main')
@section('title', 'Detalhes da Fly')
@section('content')
<div class="max-w-3xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-10">
    <h1 class="text-3xl font-extrabold mb-4 text-green-600 text-center">{{ $fly->title }}</h1>
    <p class="text-gray-700 mb-6">{{ $fly->description }}</p>
    <p class="text-sm text-gray-500">Categoria: {{ $fly->category }}</p>
    <p class="text-sm text-gray-500">Criado em: {{ $fly->created_at->format('d/m/Y H:i') }}</p>
    @if ( auth()->check() && auth()->user()->id === $fly->user_id)
        <x-fly-edit :fly="$fly" />
    @endif
</div>
@endsection