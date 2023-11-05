@props(['show' => false, 'color'])

<div x-data="{ show: {{ $show }} }">
    <div  x-cloak x-show="show" x-transition.duration.9000ms x-init="setTimeout( () => show = false, 3000 )" class="fixed top-6 right-6 text-sm p-3 rounded-md z-50 flex bg-blue-500">
        <p class="text-blue-200 font-semibold">{{ $slot }}</p>
        <p class=" text-white pl-4 cursor-pointer" x-on:click="show = false;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>              
        </p>
    </div>
</div>