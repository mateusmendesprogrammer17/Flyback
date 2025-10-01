<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Flyback')</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
  <header x-data="{ openMobile: false }">
    <nav class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <!-- Logo -->
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flyback</span>
        </a>

        <!-- Botão mobile -->
        <button @click="openMobile = !openMobile"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-menu" aria-expanded="false">
          <span class="sr-only">Abrir menu</span>
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
               xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>

        <!-- Links / Menu -->
        <div :class="openMobile ? 'block' : 'hidden'" class="w-full md:block md:w-auto ml-auto" id="navbar-menu">
          <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 
                     md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white 
                     dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

            <!-- Links comuns -->
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700 md:p-0 dark:text-white">Sobre</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 hover:text-blue-700 md:p-0 dark:text-white">Faqs</a>
            </li>

            <!-- Desktop Dropdown Visitante -->
            <li x-data="{ open: false }" class="relative hidden md:block">
              <button 
                @mouseenter="open = true" 
                @mouseleave="open = false"
                class="group flex items-center space-x-2 w-44 py-2 px-3 text-gray-900 hover:text-green-600 md:p-0 dark:text-white">
                <!-- Ícone de usuário -->
                <svg class="w-6 h-6 text-gray-800 group-hover:text-green-600 dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <span>Visitante</span>
              </button>

              <div x-show="open" 
                   @mouseenter="open = true" 
                   @mouseleave="open = false"
                   class="absolute right-0 mt-2 w-44 bg-white dark:bg-gray-700 rounded-lg shadow-lg z-50" x-transition>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                      Login
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                      Criar conta
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <!-- Mobile Links diretos Visitante -->
            <li class="block md:hidden mt-2 border-t border-gray-200 pt-2 dark:border-gray-600">
                <a href="#" 
                    @click.prevent="window.location.href='/login'"
                    class="flex items-center py-2 px-3 text-gray-900 hover:text-green-600 dark:text-white">
                    <!-- Ícone Login -->
                    <svg class="w-5 h-5 mr-2 text-gray-800 hover:text-green-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                    </svg>
                    Login
                </a>
                <a href="#" 
                    @click.prevent="window.location.href='/register'"
                    class="flex items-center py-2 px-3 text-gray-900 hover:text-green-600 dark:text-white">
                    <!-- Ícone Criar Conta -->
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v16m8-8H4"></path>
                    </svg>
                    Criar Conta
                </a>
                </li>

          </ul>
        </div>

      </div>
    </nav>

    <script src="//unpkg.com/alpinejs" defer></script>
  </header>

  <main>
    @yield('content')
  </main>
</body>
</html>
