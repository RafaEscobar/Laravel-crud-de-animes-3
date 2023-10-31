<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil de usuario
        </h2>
    </x-slot>
    <div class="flex">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 w-4/12 ">
            <div class="mt-2 flex flex-col justify-center items-center bg-white p-4 rounded-xl">
                <div>
                    <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}" alt="{{ Auth()->user()->name }}" class="rounded-full h-48 w-48 object-cover">
                </div>  
                <div class="">
                    <p class="my-4 text-xl">Nombre de usuario: {{Auth()->user()->name}}</p>
                    <p class="my-4 text-xl">Correo electronico: {{Auth()->user()->email}}</p>
                </div>
            </div>
        </div>
        <div class="w-8/12 p-8 flex flex-wrap">
            @foreach (Auth()->user()->animes as $anime)
                <x-card-anime-list :id="$anime->id" :title="$anime->name" :anime_portada_path="$anime->anime_portada_path" />
            @endforeach
                
        </div>
    </div>
</x-app-layout>
