<x-app-layout>
    <x-slot name="header">
        <h2>Anime: {{$anime->name}}</h2>
    </x-slot>
    <div class="flex justify-center mt-6">
        <div class=" w-4/12 flex flex-col items-center">
            <div>
                <img src="{{Storage::url($anime->anime_portada_path)}}" alt=""
                    class="h-48 w-48 rounded-full">
            </div>
            <hr class="bg-black w-full my-3">
            <div class="mb-3">
                <p class="text-xl">Nombre: {{$anime->name}}</p>
            </div>
            <div class="flex gap-6">
                <div>
                    <p>Genero: {{$anime->genere}}</p>
                </div>
                <div>
                    <p>Cantidad de temporadas: {{$anime->seasonCount}}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
