@extends('layouts.main')
@section('title', 'Editar Usuário')
@section('content')

<section class="bg-gray-50 min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div class="bg-white rounded-lg shadow-xl px-6 py-8 sm:px-10">
      <h2 class="text-3xl font-bold text-center text-gray-900">
        Editar Usuário
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

      <form class="mt-8 space-y-6" method="POST" action="{{ route('users.update', $user,false) }}">
        @csrf
        @method('PUT')

        <!-- Nome -->
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Nome:</label>
          <input type="text" name="name" id="name" placeholder="Seu nome"
                 value="{{ old('name', $user->name) }}" required
                 class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm text-gray-900">
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
          <input type="email" name="email" id="email" placeholder="seu@email.com"
                 value="{{ old('email', $user->email) }}" required
                 class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm text-gray-900">
        </div>

        <!-- Senha (opcional) -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Nova Senha:</label>
          <input type="password" name="password" id="password" placeholder="Deixe em branco para manter a atual"
                 class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm text-gray-900">
        </div>

        <!-- Confirmação de senha -->
        <div>
          <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Senha:</label>
          <input type="password" name="password_confirmation" id="password_confirmation"
                 placeholder="Confirme a nova senha"
                 class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500 text-sm text-gray-900">
        </div>

        <!-- Botão enviar -->
        <div>
          <button type="submit"
                  class="w-full flex justify-center py-2 px-4 border border-transparent rounded-lg shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 font-medium text-sm">
            Atualizar Usuário
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection
