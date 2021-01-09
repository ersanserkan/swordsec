<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swordsec</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <livewire:styles />
    
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
</head>

<body>
    <div>
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="block">
                            <div class="flex items-baseline space-x-4">
                                <a href="{{ route('dashboard') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>

                                @can('view first')
                                    <a href="{{ route('page.first') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sayfa #1</a>
                                @endcan

                                @can('view second')
                                    <a href="{{ route('page.second') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sayfa #2</a>
                                @endcan
                            </div>
                        </div>
                    </div>

                    <div class="block">
                        <div class="ml-4 flex items-center md:ml-6 space-x-4">
                            <span class="text-gray-300 text-sm">{{ auth()->user()->email }}</span>
                            
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            
                            <a href="{{ route('logout') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm">Çıkış yap</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        @isset ($title)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold leading-tight text-gray-900">
                        {{ $title }}
                    </h1>
                </div>
            </header>
        @endisset

        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>
    
    <livewire:scripts />
</body>

</html>