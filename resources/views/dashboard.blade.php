<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="w-2/12 flex items-center mt-4 ml-4">
                    <p class="text-xl">Cantidad: </p>
                    <div class="w-full ml-4">
                        {{ Form::select('quantity', $quantity, null, ['class' => 'border-2 border-gray-300  rounded-xl px-2 py-1 bg-white font-mono w-full'] ) }} 
                        
                    </div>
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
