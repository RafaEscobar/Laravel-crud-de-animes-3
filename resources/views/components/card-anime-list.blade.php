@props(['title', 'anime_portada_path'])

<div class="m-8">
    <div class="w-48 bg-white p-4 rounded-3xl">
        <img src="{{Storage::url($anime_portada_path)}}" alt="" srcset="" />
        <div class="flex mt-4 justify-center items-center">
            <div class="w-10/12 text-xs font-normal">
                <p>{{$title}}</p>
            </div>
            <div class="checkbox-wrapper-31 w-10/12 ml-2">
                <input type="checkbox" />
                <svg viewBox="0 0 35.6 35.6">
                    <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                    <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                    <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                </svg>
            </div>
        </div>
    </div>
</div>
