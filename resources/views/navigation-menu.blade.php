<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto pl-20">
        <div class="flex justify-between h-16 ">
            <div class="flex">
                <!-- Logo -->
                <div class="flex justify-center items-center ">
                    <img src="{{ asset('storage/assets/logo.jpg') }}" alt="Sin imagen" width="60">
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        Listado de animes
                    </x-nav-link>
                </div>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6 ">
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <div class="group inline-block">
                        <div class="mr-28">
                            <button class="flex items-center  outline-none focus:outline-none">
                                <img class="h-10 w-10 rounded-full object-cover" src="{{Storage::url(Auth::user()->profile_photo_path)}}" alt="{{ Auth::user()->name }}" />
                            </button>
                        </div>
                        <ul class="w-full absolute origin-top scale-0 transform rounded-sm border bg-white transition duration-150 ease-in-out group-hover:scale-100">
                            <li class="rounded-sm px-3 py-1 text-gray-600 text-xs">Detalles</li>
                            <hr class="border-gray-300">
                            @if (!request()->routeIs('dashboard'))
                                <a href="{{route('dashboard')}}">
                                    <li class="rounded-sm px-3 py-1 hover:bg-gray-100 cursor-pointer">
                                        Inicio                                            
                                    </li>
                                </a>
                            @endif
                            <a href="{{route('user.profile', Auth()->user()->id)}}">
                                <li class="rounded-sm px-3 py-1 hover:bg-gray-100 cursor-pointer">
                                    Perfil de usuario
                                </li>
                            </a>
                            <li class="relative rounded-sm px-3 py-1 hover:bg-gray-100">
                                <button class="flex w-full items-center text-left outline-none focus:outline-none">
                                    <span class="flex-1 pr-1">Administración</span>
                                    <span class="mr-auto">
                                        <svg class="h-4 w-4 fill-current transition duration-150 ease-in-out"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span>
                                </button>
                                <ul class="absolute right-0 top-0 min-w-full origin-top-right rounded-sm border bg-white transition duration-150 ease-in-out">
                                    <a href="{{route('user.index')}}">
                                        <li class="px-3 py-1 hover:bg-gray-100 cursor-pointer">Panel de usuarios</li>
                                    </a>
                                    <a href="{{route('anime.index')}}">
                                        <li class="px-3 py-1 hover:bg-gray-100 cursor-pointer">Panel de animes</li>
                                    </a>
                                </ul>
                            </li>
                            <li class="rounded-sm px-3 py-1 bg-white hover:bg-black hover:text-white cursor-pointer">Cerrar sesión</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
