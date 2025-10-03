@extends('layouts.main')
@section('title', 'Crie sua Fly')
@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-green-600">Crie sua Fly</h1>
    <form action="{{ route('flys.create',[],false) }}" method="POST" class="space-y-6">
        @csrf
        <div>   
            <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" name="title" id="title" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-green-500 focus:border-green-500">
        </div>          
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Descrição</label>
            <textarea name="description" id="description" rows="4" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-green-500 focus:border-green-500"></textarea>
        </div>
        <div>
            <label for="category" class="block text-sm font-medium text-gray-700">Categoria</label>
            <select name="category" id="category" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-green-500 focus:border-green-500">
                <option value="Tecnologia">Tecnologia</option>
                <option value="Educação">Educação</option>
                <option value="Saúde">Saúde</option>
                <option value="Meio Ambiente">Meio Ambiente</option>
                <option value="Outro">Outro</option>
            </select>             
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-green-600 text-white px-4 py
-2 rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">Enviar</button>
        </div>
    </form>
</div>
@endsection