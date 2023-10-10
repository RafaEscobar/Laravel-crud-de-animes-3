@props(['title', 'image', 'description', 'animeId'])

<div {{$attributes->merge(['class' => 'flex w-80 flex-col justify-center bg-white p-4 rounded-3xl shadow-2xl mb-8' ]) }}>
    <div class="h-36 w-full">
        <img src="{{Storage::url($image)}}" alt="" class="h-40 w-full" />
    </div>
    <div class="mt-8 w-full">
        <hr class="my-2 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
        <div class="flex w-full items-center ">
            <div class="w-10/12 ">
                <p class=" text-2xl">{{$title}}</p>
            </div>
            <div class="w-2/12 flex justify-center">
                <a class="cursor-pointer" href="{{route('addPending', $animeId)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-12 w-12 hover:fill-blue-200 active:fill-blue-100">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="mt-2">
            <p class="">{{$description}}</p>
        </div>
    </div>
</div>
