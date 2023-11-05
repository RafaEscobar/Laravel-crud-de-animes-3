@props(['color'])

<div x-data="app" class="min-w-screen grid min-h-screen place-items-center">
    <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms class="fixed right-4 top-4 z-50 rounded-md {{$color}} px-4 py-2 text-white transition hover:bg-green-600">
        <div class="flex items-center space-x-2">
            <p class="font-semibold">Item Created Successfully!</p>
            <p class=" text-{{$color}}-200 cursor-pointer" x-on:click="show = false;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>              
            </p>
        </div>
    </button>

    <button type="button" @click="openToast()" class="rounded-md bg-blue-500 px-4 py-2 font-bold text-white transition hover:bg-blue-600">Launch toast</button>
</div>

<script>
  let timer;

  document.addEventListener("alpine:init", () => {
      Alpine.data("app", () => ({
          open: false,

          openToast() {
              if (this.open) return;
              this.open = true;

              clearTimeout(timer);

              timer = setTimeout(() => {
                  this.open = false;
              }, 5000);
          },

          closeToast() {
              this.open = false;
          },
      }));
  });
</script>