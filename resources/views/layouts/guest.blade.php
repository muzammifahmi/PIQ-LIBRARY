<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'PIQ LIBRARY') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-b from-blue-50 to-white">
            <div>
                <a href="/">
                    <x-application-logo class="w-12 h-12 fill-current text-blue-600" />
                </a>
            </div>

            <div class="w-full max-w-md mt-6 px-8 py-8 bg-white shadow-lg rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
