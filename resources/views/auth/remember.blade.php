@extends('layouts.main')

@section('title', 'Esqueci minha senha')
@section('meta_description', 'Recupere sua senha esquecida para acessar sua conta.')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Esqueci minha senha</h2>
        
    @if (session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('status') }}
        </div>
    @elseif(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.remember.post', [], false) }}">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Endereço de Email</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                value="{{ old('email') }}" 
                required
                class="w-full px-3 py-2 border rounded-lg @error('email') border-red-500 @enderror"
                placeholder="Digite seu endereço de email">
                
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <button type="submit"
                    class="w-full bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Enviar Link de Recuperação
            </button>
        </div>

        <div class="mt-4 text-center">
            <p class="text-sm text-gray-500">
                Lembrou da senha? 
                <a href="{{ route('login',[],false) }}" class="text-blue-500 hover:text-blue-700">
                    Faça login
                </a>
            </p>
        </div>
    </form>
</div>
@endsection
