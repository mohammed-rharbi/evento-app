<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="home min-h-screen flex flex-col justify-center items-center bg-gray-100 dark:bg-gray-900">
    <div>
        <a href="/">
            <img src="{{ asset('images/evento_logo__event_production-removebg-preview.png') }}" alt="event image" class="w-44 h-44 fill-current text-gray-500">
        </a>
    </div>
    <div class="w-full max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden rounded-lg">
        {{ $slot }}
    </div>
</div>
</body>
</html>
