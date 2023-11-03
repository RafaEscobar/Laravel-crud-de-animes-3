<x-app-layout>
    <x-slot name="header">
        <h2>Detalle del usuario</h2>
    </x-slot>
    <div class="flex justify-center">
        <div class="w-4/12 mt-8">
            <div class="flex justify-center">
              <img src="{{Storage::url($user->profile_photo_path)}}" alt="" srcset="" class="w-60 h-60 rounded-full">
            </div>
            <hr class="mt-4 mb-2 border-black">
            <div class="ml-4">
              <span class="block mb-2">
                <span class="text-xl font-semibold">Nombre:  </span>
                <span class="text-xl">{{$user->name}}</span>
              </span>
              <span class="black">
                <span class="text-xl font-semibold">Correo electrónico:  </span>
                <span class="text-xl">{{$user->email}}</span>
              </span>
            </div>
        </div>
    </div>
</x-app-layout>