@section('carousel')
<div carousel console>
<div class="relative w-[1200px] h-[720px]  mx-auto">
    <div class="slide relative" >
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/megadrive2.jpg')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Sega Megadrive 2</div>
    </div>

    <div class="slide relative">
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/gameboy.jpg')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Nintendo Gameboy</div>
    </div>

    <div class="slide relative">
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/gamegear.jpg')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Sega Game Gear
        </div>
    </div>
    <div class="slide relative">
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/Super-Nintendo.jpg')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Super Nintendo
        </div>
    </div>
    <div class="slide relative">
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/Neogeoaes.jpg')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Neo Geo
        </div>
    </div>
    <div class="slide relative" >
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/metalslug.jpg')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Metal slug</div>
    </div>

    <div class="slide relative">
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/pacman.jpg')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Pacman</div>
    </div>

    <div class="slide relative">
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/sonic1.png')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Sonic 1
        </div>
    </div>
    <div class="slide relative">
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/spaceinvender.jpg')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Space invender
        </div>
    </div>
    <div class="slide relative">
        <img class="w-full h-[720px] object-cover"
            src="{{asset ('img/super_mario.png')}}">
        <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white">Super Mario Bros
        </div>
    </div>


    <!-- The previous button -->
    <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
        onclick="moveSlide(-1)">❮</a>

    <!-- The next button -->
    <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
        onclick="moveSlide(1)">❯</a>

</div>
<br>

<!-- The dots -->
<div class="flex justify-center items-center space-x-5">
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(5)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(6)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(7)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(8)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(9)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(10)"></div>
</div>

<!-- Javascript code -->
<script>
    // set the default active slide to the first one
    let slideIndex = 1;
    showSlide(slideIndex);

    // change slide with the prev/next button
    function moveSlide(moveStep) {
        showSlide(slideIndex += moveStep);
    }

    // change slide with the dots
    function currentSlide(n) {
        showSlide(slideIndex = n);
    }

    function showSlide(n) {
        let i;
        const slides = document.getElementsByClassName("slide");
        const dots = document.getElementsByClassName('dot');

        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }

        // hide all slides
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.add('hidden');
        }

        // remove active status from all dots
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove('bg-purple-500');
            dots[i].classList.add('bg-blue-600');
        }

        // show the active slide
        slides[slideIndex - 1].classList.remove('hidden');

        // highlight the active dot
        dots[slideIndex - 1].classList.remove('bg-blue-600');
        dots[slideIndex - 1].classList.add('bg-purple-500');
    }
</script>

</div>
@endsection
<div id="default-carousel" class="relative" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
            <img src=src="{{asset ('img/entete.png')}}"  class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-2.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-3.svg" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="hidden">Previous</span>
        </span>
    </button>
    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="hidden">Next</span>
        </span>
    </button>
</div>
