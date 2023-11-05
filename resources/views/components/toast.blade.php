@props(['show', 'type'])

<div x-data="{ show: false }"
    x-init="if ({{$show}}) { setTimeout(() => { show = true; setTimeout(() => { show = false; }, 1000); }, 200); }">
    
    @if ($type == 'success')
        <div x-cloak x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed top-6 right-6 text-sm p-3 rounded-md z-50 flex bg-green-500">
            <p class="text-white font-semibold">{{ $slot }}</p>
            <p class="text-white pl-4 cursor-pointer" x-on:click="show = false;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </p>
        </div>
    @elseif ($type == 'info')
        <div x-cloak x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed top-6 right-6 text-sm p-3 rounded-md z-50 flex bg-blue-500">
            <p class="text-white font-semibold">{{ $slot }}</p>
            <p class="text-white pl-4 cursor-pointer" x-on:click="show = false;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </p>
        </div>        
    @elseif ($type == 'danger')
        <div x-cloak x-show="show" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed top-6 right-6 text-sm p-3 rounded-md z-50 flex bg-red-500">
            <p class="text-white font-semibold">{{ $slot }}</p>
            <p class="text-white pl-4 cursor-pointer" x-on:click="show = false;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </p>
        </div>
    @endif

</div>
