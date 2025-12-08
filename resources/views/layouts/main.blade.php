<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Flyback')</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Alpine.js -->
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-white text-gray-900">

<header x-data="{ openMobile: false }">
  <nav class="bg-white border-b border-gray-200">
    <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-4">

      <!-- Logo -->
      <a href="{{ route('welcome', [], false) }}" class="flex items-center space-x-2">
        
        <span class="text-2xl text-green-600 font-semibold">Flyback</span>
      </a>

      <!-- Botão Mobile -->
      <button @click="openMobile = !openMobile"
              class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-600 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-green-300"
              aria-controls="navbar-menu"
              :aria-expanded="openMobile.toString()">
        <span class="sr-only">Abrir menu</span>
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>

      <!-- Menu de Navegação -->
      <div :class="openMobile ? 'block' : 'hidden'" class="w-full md:flex md:items-center md:w-auto mt-4 md:mt-0" id="navbar-menu">
        <ul class="flex flex-col md:flex-row md:space-x-8 font-medium p-4 md:p-0 border rounded-lg md:border-none bg-gray-50 md:bg-white border-gray-100">

          <!-- Links comuns -->
          <li><a href="#" class="block py-2 px-3 hover:text-green-700 transition">Sobre</a></li>
          <li><a href="#" class="block py-2 px-3 hover:text-green-700 transition">Faqs</a></li>

          @auth
            <!-- Componente dinâmico -->
            <x-link-verificado />

            <!-- Dropdown desktop -->
            <li x-data="{ open: false }" class="relative hidden md:block">
              <div @mouseenter="open = true" @mouseleave="open = false">
                <button class="flex items-center space-x-2 py-2 px-3 hover:text-green-600 focus:outline-none">
                  <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd"/>
                  </svg>
                  <span>{{ Auth::user()->name }}</span>
                </button>
                <div x-show="open" x-transition
                     class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg z-50">
                  <ul class="py-2 text-sm text-gray-700">
                   
                                    <li>
                                      <a href="{{ route('users.edit', auth()->user()) }}"
                  class="block px-4 py-2 hover:bg-gray-100">
                  Editar Perfil
                </a>
                  </li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Configurações</a></li>
                    <li>
                      <form method="POST" action="{{ route('logout', [], false) }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Sair</button>
                      </form>
                    </li>
                  </ul>
                </div>
              </div>
            </li>

            <!-- Links Mobile -->
            <li class="block md:hidden border-t pt-2 mt-2">
             
              <form method="POST" action="{{ route('logout', [], false) }}">
                @csrf
                <button type="submit" class="block w-full text-left py-2 px-3 hover:text-green-600">Sair</button>
              </form>
            </li>
            <li class="block md:hidden border-t pt-2 mt-2">
            <li class="block md:hidden border-t pt-2 mt-2">
                <a href="{{ route('users.edit', auth()->user()) }}" class="block py-2 px-3 hover:text-green-600">Editar Perfil</a>
            </li>
            </li>
          @endauth

          @guest
            <!-- Visitante Desktop -->
            <li x-data="{ open: false }" class="relative hidden md:block">
              <div @mouseenter="open = true" @mouseleave="open = false">
                <button class="flex items-center w-44 space-x-2 py-2 px-3 hover:text-green-600 focus:outline-none">
                  <svg class="w-6 h-6 text-gray-700" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                  </svg>
                  <span>Visitante</span>
                </button>
                <div x-show="open" x-transition
                     class="absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg z-50">
                  <ul class="py-2 text-sm text-gray-700">
                    <li><a href="{{ route('login', [], false) }}" class="block px-4 py-2 hover:bg-gray-100">Login</a></li>
                    <li><a href="{{ route('users.create', [], false) }}" class="block px-4 py-2 hover:bg-gray-100">Criar Conta</a></li>
                  </ul>
                </div>
              </div>
            </li>

            <!-- Visitante Mobile -->
            <li class="block md:hidden border-t pt-2 mt-2">
              <a href="{{ route('login', [], false) }}" class="block py-2 px-3 hover:text-green-600">Login</a>
              <a href="{{ route('users.create', [], false) }}" class="block py-2 px-3 hover:text-green-600">Criar Conta</a>
            </li>
          @endguest

        </ul>
      </div>
    </div>
  </nav>
</header>

<main class="max-w-screen-xl mx-auto px-4 py-6">
  @yield('content')
</main>

</body>
</html>
