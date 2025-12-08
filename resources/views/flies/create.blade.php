@extends('layouts.main')

@section('title', 'Crie sua Fly')

@section('content')
<div class="max-w-3xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-10">
    <h1 class="text-3xl font-extrabold mb-8 text-green-600 text-center">Crie sua Fly</h1>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('flies.store',[],false), }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label for="title" class="block text-sm font-semibold text-gray-800 mb-2">Título</label>
            <input
                type="text"
                name="title"
                id="title"
                value="{{ old('title') }}"
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
            >{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="departamentos" class="block text-sm font-semibold text-gray-800 mb-2">Departamentos Envolvidos</label>
            <select name="departament_id" class="form-control">
                <option value="">Selecione um departamento</option>
                @foreach ($departaments as $departament)
                    <option value="{{ $departament->id }}" 
                        {{ old('departament_id') == $departament->id ? 'selected' : '' }}>
                        {{ $departament->name_dp }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-center">
            <button
                type="submit"
                class="bg-green-600 mt-10 text-white font-semibold px-10 py-3 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-400 transition"
            >
                Enviar
            </button>
        </div>
    </form>
</div>
@endsection
