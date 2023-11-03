<x-app-layout>
    <x-slot name="header">
        <h2>Crear un nuevo usuario</h2>
    </x-slot>
    <div class="flex justify-center ">
        <div class="mt-6 w-6/12 bg-white p-6 rounded-xl mb-8">
            <h3 class="text-2xl mb-4">Formulario de creación para usuarios</h3>
            {{ Form::open(['route' => 'user.store', 'method' => 'POST', 'enctype' => 'multipart/form-data' ]) }}
            <div class="mb-6">
                {{ Form::label('name', 'Ingresa el nombre del usuario:', ['class' => 'text-lg', 'id' => 'name']) }}
                {{ Form::text('name', old('name'), ['class' => 'border-2 border-gray-300 rounded-lg pl-2 focus:outline-none focus:border-blue-400 w-full']) }}
            </div>
            <div class="mb-10">
                {{ Form::label('email', 'Ingresa el correo electrónico del usuario:', ['class' => 'text-lg']) }}
                {{ Form::email('email', old('email'), ['class' => 'border-2 border-gray-300 rounded-lg pl-2 focus:outline-none focus:border-blue-400 w-full', 'id' => 'email']) }}
            </div>
            <div class="mb-10">
                {{ Form::label('email', 'Ingresa la contraseña del usuario:', ['class' => 'text-lg']) }}
                {{ Form::password('password', ['class' => 'border-2 border-gray-300 rounded-lg pl-2 focus:outline-none focus:border-blue-400 w-full', 'id' => 'password']) }}
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <label for="profile_photo_path" class="mx-auto cursor-pointer flex w-10/12 flex-col items-center rounded-xl border-2 border-dashed border-blue-500 bg-white p-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-blue-600">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                    </svg>
    
                    <snap class="mt-4 text-lg font-medium text-blue-600">Cargar imagen</snap>
                    <snap class="mt-2 text-blue-600 text-sm">Formatos soportados: SVG, PNG, JPG or GIF. </snap>
    
                    {{ Form::file('profile_photo_path', ['class' => 'hidden', 'id' => 'profile_photo_path']) }}
                </div>
                <div id="divImage" class="flex justify-center items-center w-1/2">
                    <img src="{{ asset('storage/assets/usuario.png') }}" alt="" id="destinationImage" class="w-40 h-40 rounded-full">
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <x-button >
                    Enviar formulario
                </x-button>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</x-app-layout>
