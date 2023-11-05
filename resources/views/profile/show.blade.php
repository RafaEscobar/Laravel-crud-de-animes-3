<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Perfil de usuario
        </h2>
    </x-slot>
    @if (session('response'))
        <x-toast show="true" :color="session('color')">{{session('response')}}</x-toast> 
    @endif
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
            @if ( count(Auth()->user()->animes) > 0 )
                @foreach (Auth()->user()->animes as $anime)
                    <x-card-anime-list :id="$anime->id" :title="$anime->name" :anime_portada_path="$anime->anime_portada_path" />
                @endforeach
            @else
                <div class="flex flex-col justify-center items-center w-full">
                    <div class="mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                          </svg>                          
                    </div>
                    <p class="font-semibold text-xl">No cuentas con animes para mostrar</p>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
