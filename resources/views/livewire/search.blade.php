<div class="relative">
    <div x-data="{ open: true }" @click.away="open = false">
        <div class="relative">
            <input
                x-ref="search"
                wire:model.debounce.500ms="search"
                @focus="open = true"
                @keydown.escape.window="open = false; $wire.set('search', '')"
                @keydown.window.prevent.?="$refs.search.focus()"
                @keydown="open = true"
                type="text"
                class="w-full px-24 py-6 border border-gray-100 rounded-full shadow-2xl text-md focus:outline-none text-md"
                placeholder='Aramaya başlamak için buraya tıklayın (veya ? tuşuna basın)'
            />

            <div class="absolute top-6 left-6">
                <svg class="w-6 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>

            <div class="absolute top-6 right-6">
                <button wire:click="$set('search', '')" class="focus:outline-none">
                    <svg class="w-6 text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        @if (strlen($search))
            <div
                class="absolute w-full pt-8 bg-white border border-t-0 border-gray-100 shadow-xl top-12"
                x-show="open"
            >
                @if ($searchResults->count() > 0)
                    <ul>
                        @foreach ($searchResults as $each)
                            <li class="flex items-center px-4 py-2 text-lg cursor-pointer hover:bg-blue-100">
                                <img src="https://picsum.photos/50/50" class="rounded-md" />

                                <a href="#" class="ml-4">{{ Str::limit($each->url, 50) }}</a>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="py-8 text-gray-400 border-gray-200 rounded-b-lg text-center">"{{ $search }}" için herhangi bir sonuç bulunamadı..</div>
                @endif
            </div>
        @endif
    </div>
</div>
