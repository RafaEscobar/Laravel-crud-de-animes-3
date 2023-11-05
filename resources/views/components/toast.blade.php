@props(['show', 'color'])

<div x-data="{ show: {{ $show }} }">
    <div  x-cloak x-show="show" x-transition.duration.500ms x-init="setTimeout( () => show = false, 3000 )" class="fixed top-6 right-6 text-sm p-3 rounded-md z-50 flex {{ $color == 'blue' ? 'bg-blue-200' : 'bg-orange-200' }} {{ $color == 'blue' ? 'text-blue-800' : 'text-orange-800' }}">
        <p>{{ $slot }}</p>
        <p class="text-blue-900 pl-4 cursor-pointer" x-on:click="show = false;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>              
        </p>
    </div>
</div>


{{-- <div x-data="{ show: {{ $show }} }">
    <div  x-cloak x-show="show" x-transition.duration.500ms x-init="setTimeout( () => show = false, 3000 )" class="fixed top-6 right-6 text-sm p-3 rounded-md z-50 flex {{ $color == 'blue' ? 'bg-blue-200' : 'bg-orange-200' }} {{ $color == 'blue' ? 'text-blue-800' : 'text-orange-800' }}">
        <p>{{ $slot }}</p>
        <p class="text-blue-900 pl-4 cursor-pointer" x-on:click="show = false;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>              
        </p>
    </div>
</div> --}}