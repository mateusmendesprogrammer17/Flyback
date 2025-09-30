<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Flyback')</title>
    <!-- Link para o arquivo de CSS principal -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <!-- Permite a inserção de estilos adicionais por página -->
    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">

    <!-- Cabeçalho do site -->
    <header>
        <nav class="bg-white shadow p-4">
            <div class="container mx-auto">
                <a href="/" class="text-xl font-bold text-gray-800">Flyback</a>
            </div>
        </nav>
    </header>

    <!-- Conteúdo principal da página -->
    <main class="flex-1 container mx-auto py-8">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="bg-white border-t p-4 text-center text-gray-500 text-sm">
        &copy; {{ date('Y') }} Flyback. Todos os direitos reservados.
    </footer>

    <!-- Script principal do site -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- Permite a inserção de scripts adicionais por página -->
    @stack('scripts')

</body>
</html>
