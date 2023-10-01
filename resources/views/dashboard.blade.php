<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div>
                    <p>Cantidad: </p>
                    
                </div>
                <div class="bg-white bg-opacity-25 p-6 lg:p-8 grid grid-cols-3 gap-4">
                    @foreach ($animes as $anime)    
                      <x-card-anime>
                        <x-slot:image>
                            {{$anime->anime_portada_path}}
                        </x-slot>
                        <x-slot:title>{{$anime->name}}</x-slot>
                        <x-slot:description>
                            {{$anime->description}}                            
                        </x-slot>
                      </x-card>
                    @endforeach
                </div>             
                <div class="bg-white mx-8 my-4">
                    {{ $animes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
