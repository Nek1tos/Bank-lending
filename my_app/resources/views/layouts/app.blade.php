<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EPJ0rK1w8F7D1tJ5FzYI8pMxw3Onk8Kx0ZT2bXXbPUZVjG47w5c4ynQ7Bz3C4K8b" crossorigin="anonymous">
    <style>
        body { padding-top: 70px; background: #f8fafb; }
        .navbar-brand { font-weight: 700; }
    </style>
</head>
<body>
    @include('layouts.navigation')

    <main class="container py-4">
        {{ $slot }}
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQta6qD3JP/0j4m1XKUuxZ0l8/C6+0DEDWgM5zJul/LUKID4+6OiWvuVmMee5xIa" crossorigin="anonymous"></script>
</body>
</html>
