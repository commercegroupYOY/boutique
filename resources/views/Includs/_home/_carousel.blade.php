<div id="carousel">
    <div class="relative  mx-auto p-20 ">
        @foreach ($products as $product)

            <div class="slide relative">
                <img class="w-full h-[720px] object-cover" src="{{ $product->image }}">
                <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white"> {{ $product->name }}
                </div>
            </div>
        @endforeach

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
        @foreach ($product as $products)
            <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="{{ $product->id }}"></div>
        @endforeach
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

            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }

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
