<x-app-layout>
    <x-slot name="header">
        <h2>Gestión de usuarios</h2>
    </x-slot>
    <x-toast :show="session('visibility')" :type="session('type')">{{session('response')}}</x-toast>
    <div class="w-full">    
        <div class="flex flex-col w-full p-8">
            <div class="flex justify-end mb-4">
                <x-button>
                    <a href="{{route('user.create')}}">Crear usuario</a>   
                </x-button>
            </div>
            @if (count($users) > 0)
                <table class="text-left text-sm font-light w-full">
                    <thead class="bg-gray-800 text-white">
                        <tr class="">
                            <th scope="col" class="py-4 text-xl pl-4">Foto de perfil</th>
                            <th scope="col" class="py-4 text-xl">Nombre</th>
                            <th scope="col" class="py-4 text-xl">Correo electronico</th>
                            <th scope="col" class="py-4 text-xl">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach ($users as $user)                        
                            <tr class="">
                                <td class="whitespace-nowrap py-2">
                                    <div class="flex justify-center items-center">
                                        <img src="{{Storage::url($user->profile_photo_path)}}" alt="" class="w-14 h-14 rounded-full">
                                    </div>
                                </td>
                                <td class="whitespace-nowrap py-2 text-lg">{{$user->name}}</td>
                                <td class="whitespace-nowrap py-2 text-lg ">{{$user->email}}</td>
                                <td class="">
                                    <div class="flex justify-around items-center">
                                        <a href="{{route('user.show', $user)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>    
                                        </a>
                                        <a href="{{route('user.edit', $user)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                        {{ Form::open(['url' => route('user.destroy', $user), 'method' => 'DELETE']) }}
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>                               
                                        </button>
                                        {{ Form::close() }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="flex flex-col justify-center items-center mt-10">
                    <div class="mb-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>                              
                        </span>
                    </div>
                    <div>
                        <span class="text-2xl font-semibold">No hay usuarios para mostrar.</span>
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
