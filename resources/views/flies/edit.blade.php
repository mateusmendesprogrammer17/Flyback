@extends('layouts.main')
@section('title', 'Edite sua Fly')
@section('content')
<div class="max-w-3xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-10">
    <h1 class="text-3xl font-extrabold mb-8 text-green-600 text-center">Edite sua Fly</h1>
    <form action="{{ route('flies.update', ['fly' => $fly], false) }}"   method="post" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block text-sm font-semibold text-gray-800 mb-2">Título</label>
            <input
                type="text"
                name="title"
                id="title"
                value="{{ old('title', $fly->title) }}"
                required
                placeholder="Digite o título da sua Fly"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
            >
        </div>
        <div>
            <label for="description" class="block text-sm font-semibold text-gray-800 mb-2">Descrição</label>
            <textarea
                name="description"
                id="description"
                rows="5"
                required
                placeholder="Descreva sua ideia aqui"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition resize-none"
            >{{ old('description', $fly->description) }}</textarea>
        </div>
        <div>
            <label for="category" class="block text-sm font-semibold text-gray-800 mb-2">Categoria</label>
            <select
                name="category"
                id="category"
                required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition"
            >
                <option value="">Selecione uma categoria</option>
                <option value="Tecnologia" {{ old('category', $fly->category) == 'Tecnologia' ? 'selected' : '' }}>Tecnologia</option>
                <option value="Educação" {{ old('category', $fly->category) == 'Educação' ? 'selected' : '' }}>Educação</option>
                <option value="Saúde" {{ old('category', $fly->category) == 'Saúde' ? 'selected' : '' }}>Saúde</option>
                <option value="Meio Ambiente" {{ old('category', $fly->category) == 'Meio Ambiente' ? 'selected' : '' }}>Meio  Ambiente</option>
                <option value="Outro" {{ old('category', $fly->category) == 'Outro' ? 'selected' : '' }}>Outro</option>
            </select>
        </div>
        <div class="flex justify-center">
            <button
                type="submit"
                class="bg-green-600 text-white font-semibold px-10 py-3 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-400 transition"
            >
                Atualizar
            </button>
        </div>
    </form>
</div>
@endsection
