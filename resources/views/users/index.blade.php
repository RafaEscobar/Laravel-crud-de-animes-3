<x-app-layout>
    <x-slot name="header">
        <h2>Gestión de usuarios</h2>
    </x-slot>
    <div class="w-full">
        <div class="flex flex-col w-full p-8">
            <table class="text-left text-sm font-light w-full">
                <thead class="bg-gray-800 text-white">
                    <tr class="">
                        <th scope="col" class="px-6 py-4">Foto de perfil</th>
                        <th scope="col" class="px-6 py-4">Nombre</th>
                        <th scope="col" class="px-6 py-4">Correo electronico</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="">
                        <td class="whitespace-nowrap px-6 py-4">1</td>
                        <td class="whitespace-nowrap px-6 py-4">Mark</td>
                        <td class="whitespace-nowrap px-6 py-4">Otto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
