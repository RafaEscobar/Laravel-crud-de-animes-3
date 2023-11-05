<div x-data="{ open: false }">
    <button @click="open = true">Mostrar Toast</button>
    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="bg-green-200 p-2 rounded shadow-md">
      ¡Este es un toast con animación!
    </div>
</div>  