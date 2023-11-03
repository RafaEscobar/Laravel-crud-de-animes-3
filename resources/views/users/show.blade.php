<x-app-layout>
    <x-slot name="header">
        <h2>Detalle del usuario</h2>
    </x-slot>
    <div class="bg-red-500">
        <div class="w-8/12">
            <div class="flex justify-center">
              <img src="https://cdn-icons-png.flaticon.com/512/6073/6073873.png" alt="" srcset="" class="w-60 h-60">
            </div>
            <hr class="mt-4 mb-2 border-black">
            <div class="ml-4">
              <span class="block mb-2">
                <span class="text-xl font-semibold">Nombre:  </span>
                <span class="text-lg">Rafael</span>
              </span>
              <span class="black">
                <span class="text-xl font-semibold">Correo electrónico:  </span>
                <span class="text-lg">rafa@gmail.com</span>
              </span>
            </div>
        </div>
    </div>
</x-app-layout>