<div class="flex h-screen">

    <div class="relative w-1/2 h-full">
        <img class="absolute object-cover w-full h-full -z-40" src="images/x2.png" alt="Banner Image" />
    </div>

    <div class="flex-col items-center justify-center w-1/2 min-h-screen pt-20 bg-white sm:justify-center sm:pt-12">
        <div>
            {{ $logo }}
        </div>

        <div class="w-full px-0 py-1 mt-0 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

</div>
