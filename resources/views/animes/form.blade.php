<div>
    <div class="mb-6">
        {{ Form::label('name', 'Nombre del anime') }}
        {{ Form::text('name', $anime->name ?? old('name'), ['class' => 'border-2 border-gray-300 rounded-lg pl-2 focus:outline-none focus:border-blue-400 w-full', 'id' => 'name']) }}
    </div>
    <div class="mb-6">
        {{ Form::label('description', 'Descripción del anime') }}
        {{ Form::textarea('description', $anime->description ?? old('description'), ['class' => 'border-2 border-gray-300 rounded-lg pl-2 focus:outline-none focus:border-blue-400 w-full', 'rows' => 3, 'id' => 'name']) }}
    </div>
    <div class="mb-6 flex gap-4">
        <div class="w-1/2">
            {{ Form::label('genere', 'Genero del anime') }}
            {{ Form::text('genere', $anime->genere ?? old('genere'), ['class' => 'border-2 border-gray-300 rounded-lg pl-2 focus:outline-none focus:border-blue-400 w-full', 'id' => 'name']) }}            
        </div>
        <div class="w-1/2">
            {{ Form::label('seasonCount', 'Total de temporadas del anime') }}
            {{ Form::number('seasonCount', $anime->seasonCount ?? old('seasonCount'), ['class' => 'border-2 border-gray-300 rounded-lg pl-2 focus:outline-none focus:border-blue-400 w-full', 'id' => 'name']) }}
        </div>
    </div>
    <div class="flex">
        <div class="w-1/2">
            <label for="photo_path" class="mx-auto cursor-pointer flex w-10/12 flex-col items-center rounded-xl border-2 border-dashed border-blue-500 bg-white p-6 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-blue-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
            </svg>
            <snap class="mt-4 text-lg font-medium text-blue-600">Cargar imagen</snap>
            <snap class="mt-2 text-blue-600 text-sm">Formatos soportados: SVG, PNG, JPG or GIF. </snap>
            {{ Form::file('anime_portada_path', ['class' => 'hidden', 'id' => 'photo_path']) }}
        </div>
        <div id="divImage" class="flex justify-center items-center w-1/2">
            @if (!empty($user))
                <img src="{{ Storage::url($user->anime_portada_path) }}" alt="" id="destinationImage" class="w-40 h-40 rounded-full">
            @else
                <img src="{{ asset('storage/assets/usuario.png') }}" alt="" id="destinationImage" class="w-40 h-40 rounded-full">
            @endif
        </div>
    </div>
    <div class="mt-8 flex justify-end">
        <x-button>
            Enviar el formulario
        </x-button>
    </div>
</div>