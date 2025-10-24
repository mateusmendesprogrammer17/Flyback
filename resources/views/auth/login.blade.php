@extends('layouts.main')

@section('title', 'Login')

@section('content')
<section class="bg-gray-50 min-h-screen flex items-center justify-center px-4">
  <div class="w-full max-w-md bg-white rounded-xl shadow-md p-8 space-y-6">

    <div class="text-center">
      <h1 class="text-2xl font-semibold text-gray-800">Entrar na sua conta</h1>
      <p class="text-sm text-gray-500">Bem-vindo de volta! Faça login para continuar.</p>
    </div>

    <!-- Botões sociais -->
    <div class="space-y-3">
      <button class="flex items-center justify-center w-full bg-blue-600 text-white hover:bg-blue-700 font-medium py-2 px-4 rounded-lg transition">
        <svg class="w-5 h-5 mr-2" fill="white" viewBox="0 0 24 24"><path d="M22 12.07C22 6.52 17.52 2 12 2S2 6.52 2 12.07c0 4.86 3.44 8.9 8 9.83v-6.96H8v-2.87h2V9.5c0-2.02 1.2-3.14 3.04-3.14.88 0 1.8.16 1.8.16v1.98h-1.01c-.99 0-1.3.62-1.3 1.26v1.52h2.21l-.35 2.87h-1.86v6.96c4.56-.93 8-4.97 8-9.83z"/></svg>
        Entrar com Facebook
      </button>

      <button class="flex items-center justify-center w-full bg-white border border-gray-300 text-gray-700 hover:bg-gray-100 font-medium py-2 px-4 rounded-lg transition">
        <svg class="w-5 h-5 mr-2" viewBox="0 0 48 48"><path fill="#FFC107" d="M43.6 20H42V20H24v8h11.3C33.7 32.7 29.3 36 24 36c-6.6 0-12-5.4-12-12s5.4-12 12-12c3 0 5.8 1.1 7.9 3l5.7-5.7C34 6 29.3 4 24 4 12.9 4 4 12.9 4 24s8.9 20 20 20c11 0 20-8.9 20-20 0-1.4-.1-2.7-.4-4z"/><path fill="#FF3D00" d="M6.3 14.7l6.6 4.8C14.7 15.1 19 12 24 12c3 0 5.8 1.1 7.9 3l5.7-5.7C34 6 29.3 4 24 4c-7.7 0-14.4 4.3-17.7 10.7z"/><path fill="#4CAF50" d="M24 44c5.2 0 9.9-2 13.4-5.2l-6.2-5.2C29.2 35.1 26.7 36 24 36c-5.2 0-9.6-3.3-11.3-7.9l-6.5 5c3.3 6.3 10 10.9 17.8 10.9z"/><path fill="#1976D2" d="M43.6 20H42V20H24v8h11.3c-.8 2.2-2.2 4.2-4.1 5.6l6.2 5.2C37 39.2 44 34 44 24c0-1.4-.1-2.7-.4-4z"/></svg>
        Entrar com Google
      </button>
    </div>

    <div class="relative text-center">
      <span class="text-sm text-gray-400">ou continue com email</span>
    </div>

    <!-- Formulário -->
    <form method="POST" action="{{ route('login.post', [], false) }}" class="space-y-4">
      @csrf

      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" id="email" required placeholder="seu@email.com"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
      </div>

      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
        <input type="password" name="password" id="password" required placeholder="••••••••"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
      </div>

      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center">
          <input type="checkbox" name="remember" class="mr-2 rounded text-green-600 border-gray-300 focus:ring-green-500">
          Lembrar de mim
        </label>
        <a href="#" class="text-green-600 hover:underline">Esqueceu a senha?</a>
      </div>

      <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg font-semibold transition">
        Entrar
      </button>

      <p class="text-center text-sm text-gray-500">
        Não tem uma conta? 
        <a href="{{ route('users.create', [], false) }}" class="text-green-600 hover:underline">Criar conta</a>
      </p>
    </form>

  </div>
</section>
@endsection
