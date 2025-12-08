@extends('layouts.main')

@section('title', 'Redefinir Senha')
@section('meta_description', 'Crie uma nova senha para acessar sua conta.')
@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Redefinir Senha</h2>

    <form method="POST" action="{{ route('password.reset.post', [], false) }}">
        @csrf

        <!-- Token obrigatório -->
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-4">
            <label for="email" class="block text-gray-700">E-mail</label>
            <input type="email" name="email" id="email" required
                   class="w-full px-3 py-2 border rounded-lg focus:ring-green-600"
                   value="{{ old('email', request()->email) }}">
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Nova Senha</label>
            <input type="password" name="password" id="password" required
                   class="w-full px-3 py-2 border rounded-lg focus:ring-green-600">
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">
                Confirmar Nova Senha
            </label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                   class="w-full px-3 py-2 border rounded-lg focus:ring-green-600">
        </div>

        <button type="submit"
                class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
            Redefinir Senha
        </button>
    </form>
</div>
@endsection
