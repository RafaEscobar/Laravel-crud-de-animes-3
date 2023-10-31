@props(['title', 'anime_portada_path'])

<div class="m-8">
    <div class="w-48 bg-white p-4 rounded-3xl">
        <img src="{{Storage::url($anime_portada_path)}}" alt="" srcset="" />
        <div class="flex mt-4 justify-center items-center">
            <div class="w-10/12 text-xs font-normal">
                <p>{{$title}}</p>
            </div>
            <div class="">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:stroke-2 hover:text-blue-700 cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>                  
                </span>
            </div>
        </div>
    </div>
</div>
