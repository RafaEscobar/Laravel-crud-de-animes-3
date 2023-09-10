<div class="p-12 h-screen w-full">
    <div class="flex w-96 flex-col justify-center bg-white p-4 rounded-3xl shadow-2xl">
        <div class="h-40 w-full">
            <img src="{{$image}}" alt="" class="h-40 w-full" />
        </div>
        <div class="mt-8 w-full">
            <div class="flex w-full items-center ">
                <div class="w-8/12">
                    <p class=" text-xl ">{{$title}}</p>
                </div>
                <div class="w-4/12 flex justify-center">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-12 w-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="mt-2">
                <p class="font-thin">{{$description}}</p>
            </div>
        </div>
    </div>
</div>
