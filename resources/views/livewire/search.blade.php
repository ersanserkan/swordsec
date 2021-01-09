<div class="relative w-1/2">
    <div x-data="{ open: true }" @click.away="open = false">
        <div class="relative text-gray-400">
            <input
                type="text"
                wire:model.debounce.500ms="search"
                class="bg-gray-100 focus:bg-white w-full px-6 py-3 pl-12 shadow-md rounded border border-gray-100 focus:outline-none focus:ring-1 focus:ring-gray-200 focus:shadow-none"
                placeholder='Aramaya başlamak için buraya tıklayın (veya ? tuşuna basın)'
                @focus="open = true"
                @keydown.escape.window="open = false"
                @keydown="open = true"
                x-ref="search"
                x-on:keydown.window.prevent.?="$refs.search.focus(), $refs.search.placeholder = 'Aramaya başlamak için birşeyler yazın'"
            />

            <div class="absolute top-0">
                <svg class="w-5 m-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <div class="absolute top-0 right-0">
                <button wire:click="$set('search', '')" class="focus:outline-none">
                    <svg class="w-5 m-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        @if (strlen($search))
            <div
                class="absolute w-full border border-gray-200 shadow rounded mt-2"
                x-show="open"
            >
                @if ($searchResults->count() > 0)
                    <ul>
                        @foreach ($searchResults as $each)
                            <li class="border-b flex items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
                                <img src="https://picsum.photos/50/50" class="rounded-md" />

                                <a href="#" class="ml-4">{{ Str::limit($each->url, 50) }}</a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="px-3 py-3 border-t border-gray-200 text-gray-400">"{{ $search }}" için herhangi bir sonuç bulunamadı..</div>
                @endif
            </div>
        @endif
    </div>
</div>
