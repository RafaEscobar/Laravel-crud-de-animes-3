<x-app-layout>
    <x-slot name="header">
        <h2>Gestión de animes</h2>
    </x-slot>
    <div class="w-full">
        <div class="flex flex-col w-full p-8">
            <table class="text-left text-sm font-light w-full">
                <thead class="bg-gray-800 text-white">
                    <tr class="">
                        <th scope="col" class="px-6 py-4">Portada</th>
                        <th scope="col" class="px-6 py-4">Nombre</th>
                        <th scope="col" class="px-6 py-4">Genero</th>
                        <th scope="col" class="px-6 py-4">Número de temporadas #</th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    <tr class="">
                        <td class="whitespace-nowrap px-6 py-4">1</td>
                        <td class="whitespace-nowrap px-6 py-4">Mark</td>
                        <td class="whitespace-nowrap px-6 py-4">Otto</td>
                        <td class="whitespace-nowrap px-6 py-4">Otto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>