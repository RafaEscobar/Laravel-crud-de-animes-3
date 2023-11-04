<x-app-layout>
    <x-slot name="header">
        <h2>Crear un nuevo usuario</h2>
    </x-slot>
    <div class="flex justify-center ">
        <div class="mt-6 w-6/12 bg-white p-6 rounded-xl mb-8">
            {{ Form::open(['route' => 'user.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                @include('users.form')
            {{ Form::close() }}
        </div>
    </div>
</x-app-layout>
