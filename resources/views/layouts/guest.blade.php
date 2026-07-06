<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased bg-[#f8f9fa]">
        
        <nav class="w-full bg-white border-b border-gray-100 px-12 py-5 flex items-center justify-between shadow-xs">
            
            <div class="flex items-center">
                <a href="/" class="text-2xl flex items-center tracking-wide cursor-pointer select-none">
                    <span class="text-red-600 font-extrabold italic mr-1">BRASIL</span>
                    <span class="text-black font-bold not-italic">Loker</span>
                </a>
            </div>

            <div class="flex items-center space-x-6">
                <a href="/register" class="text-gray-600 hover:text-gray-900 font-medium text-sm transition">
                    Sign Up
                </a>
                <a href="/login" class="bg-[#3b82f6] hover:bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-xl text-sm shadow-sm transition flex items-center justify-center">
                    Log In
                </a>
            </div>
            
        </nav>

        <main class="w-full">
            {{ $slot }}
        </main>

    </body>
</html>