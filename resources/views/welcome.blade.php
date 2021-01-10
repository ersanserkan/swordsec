<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Swordsec</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        
        <livewire:styles />
        
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    </head>
    <body class="antialiased">
        <div class="flex items-center justify-center min-h-screen">
            <div class="fixed top-0 right-0 px-6 py-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Giriş</a>
                @endauth
            </div>

            <div class="w-auto sm:w-2/5 -mt-80">
                <livewire:search />
            </div>
        </div>
    
        <livewire:scripts />
    </body>
</html>
