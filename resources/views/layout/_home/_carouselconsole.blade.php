
<div id="carousel">
<div class="relative  mx-auto p-20 ">
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
