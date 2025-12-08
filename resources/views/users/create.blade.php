@extends('layouts.main')

@section('title', 'Criar Conta')

@section('content')
<section class="bg-gray-50 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div class="bg-white rounded-lg shadow-xl px-6 py-8 sm:px-10">
      <h2 class="text-3xl font-bold text-center text-gray-900">
        Criar Conta
      </h2>

      <!-- Exibição de erros -->
      @if($errors->any())
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul class="list-disc list-inside">
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form class="mt-8 space-y-6" method="POST" action="{{ route('users.store', [], false) }}">
        @csrf

        <!-- Nome -->
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Seu Nome:</label>
          <input type="text" name="name" id="name" placeholder="Seu nome" value="{{ old('name') }}" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm text-gray-900">
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Seu email:</label>
          <input type="email" name="email" id="email" placeholder="name@company.com" value="{{ old('email') }}" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm text-gray-900">
        </div>

        <!-- Senha -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
          <input type="password" name="password" id="password" placeholder="••••••••" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm text-gray-900">
        </div>

        <!-- Confirmar Senha -->
        <div>
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Senha</label>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm text-gray-900">
        </div>

        <!-- Termos de Uso -->
        <div class="flex items-start">
          <div class="flex items-center h-5">
            <input id="terms" aria-describedby="terms" type="checkbox" required
              class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-green-600">
          </div>
          <div class="ml-3 text-sm">
            <label for="terms" class="font-light text-gray-500">
              Eu aceito os <a href="#" class="font-medium text-green-600 hover:underline">Termos e Condições</a>
            </label>
          </div>
        </div>

        <!-- Botão Criar Conta -->
        <button type="submit"
          class="w-full py-2 px-4 text-white bg-green-600 hover:bg-green-500 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm">
          Criar Conta
        </button>

        <!-- Link para Login -->
        <p class="text-sm font-light text-center text-gray-500">
          Já tem uma conta? <a href="{{ route('login',[],false) }}" class="font-medium text-green-600 hover:underline">Entrar aqui</a>
        </p>
      </form>
    </div>
  </div>
</section>
@endsection
