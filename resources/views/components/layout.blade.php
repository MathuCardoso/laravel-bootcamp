@props([
    'title' => null,
    'fullWidth' => false,
])

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Plataforma de Cursos | {{ $title ?? '' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-10">
        <x-menu />
    </header>

    @if ($fullWidth)
        {{-- Seção opcional full-width para a largura total caso precise --}}
        {{ $slot }}
    @else
        <!-- Conteúdo centralizado -->
        <main class="max-w-6xl mx-auto py-10 px-4 grid gap-6 md:grid-cols-3">
            {{ $slot }}
        </main>
    @endif



    <!-- Footer -->
    <footer class="bg-white border-t mt-10 py-6 text-center text-sm text-gray-500">
        © 2026 Laravel Bootcamp. Todos os direitos reservados.
    </footer>
</body>

</html>
