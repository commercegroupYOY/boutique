<header>
    <!-- Main navigation container -->
    <nav class="flex-no-wrap relative flex w-full items-center justify-between bg-[#FBFBFB] py-2 shadow-md shadow-black/5 lg:flex-wrap lg:justify-start lg:py-4"
        data-te-navbar-ref>
        <div class="flex w-full flex-wrap items-center justify-between px-3">
            <!-- Hamburger button for mobile view -->
            <button
                class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
                type="button" data-te-collapse-init data-te-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Hamburger icon -->
                <span class="[&>svg]:w-7">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </button>

            <!-- Collapsible navigation container -->
            <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
                id="navbarSupportedContent1" data-te-collapse-item>
                <!-- Logo -->
                <a class="mb-4 ml-2 mr-5 mt-3 flex items-center text-neutral-900 hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
                    href="#">
                    <img src="/img/logo.png" style="height: 60px" alt="Logo" loading="lazy" />
                </a>

                <ul class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>

                        <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
                            href="/" data-te-nav-link-ref>Accueil</a>
                    </li>

                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
                            href="/Allproducts" data-te-nav-link-ref>Catalogue</a>
                    </li>

                    <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
                        <a class="text-neutral-500 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none lg:px-2 [&.active]:text-black/90"
                            href="/Team" data-te-nav-link-ref>Notre équipe</a>
                    </li>
                </ul>
            </div>
            <div class="dropdown">

                <button type="button" class="btn btn-info" data-toggle="dropdown">

                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> panier <span
                        class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>

                </button>

                <div class="dropdown-menu">

                    <div class="row total-header-section">

                        <div class="col-lg-6 col-sm-6 col-6">

                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>

                        </div>

                        @php $total = 0 @endphp

                        @foreach ((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach

                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">

                            <p>Total: <span class="text-info">€ {{ $total }}</span></p>

                        </div>

                    </div>

                    @if (session('cart'))

                        @foreach (session('cart') as $id => $details)
                            <div class="row cart-detail">

                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">

                                    <img src="{{ $details['image'] }}" />

                                </div>

                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">

                                    <p>{{ $details['name'] }}</p>

                                    <span class="price text-info"> €{{ $details['price'] }}</span> <span class="count">
                                        quantité:{{ $details['quantity'] }}</span>

                                </div>

                            </div>
                        @endforeach

                    @endif

                    <div class="row">

                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">

                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">voir le panier</a>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Container with two dropdown menus -->
            <div class="relative" data-te-dropdown-ref>
                <!-- First dropdown trigger -->
                <a class="hidden-arrow mr-4 flex items-center text-neutral-600 transition duration-200 hover:text-neutral-700 hover:ease-in-out focus:text-neutral-700 disabled:text-black/30 motion-reduce:transition-none [&.active]:text-black/90"
                    href="#" id="dropdownMenuButton1" role="button" data-te-dropdown-toggle-ref
                    aria-expanded="false">
                    <!-- Dropdown trigger icon -->


                    <!-- Second dropdown container -->
                    <div class="relative" data-te-dropdown-ref>
                        <!-- Second dropdown trigger -->
                        <a class="hidden-arrow flex items-center whitespace-nowrap transition duration-150 ease-in-out motion-reduce:transition-none"
                            href="#" id="dropdownMenuButton2" role="button" data-te-dropdown-toggle-ref
                            aria-expanded="false">
                            <!-- User avatar -->
                            <img src="https://tecdn.b-cdn.net/img/new/avatars/2.jpg" class="rounded-full"
                                style="height: 25px; width: 25px" alt="" loading="lazy" />
                        </a>
                        <!-- Second dropdown menu -->
                        <ul class="absolute left-auto right-0 z-[1000] float-left m-0 mt-1 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                            aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                            <!-- Second dropdown menu items -->
                            <li>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                    href="/dashboard" data-te-dropdown-item-ref>Connexion</a>
                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                    href="/register" data-te-dropdown-item-ref>créer un compte</a>

                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                    href="/backoffice" data-te-dropdown-item-ref>Back Office</a>

                                <a class="block w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                    href="{{ url('/logout') }}">déconnexion</a>
                                <a class="block  w-full whitespace-nowrap bg-transparent px-4 py-2 text-sm font-normal
                                    text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline
                                    disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400"
                                    href="/profile" data-te-dropdown-item-ref>profil</a>
                            </li>

                        </ul>
                    </div>
            </div>
        </div>
    </nav>
</header>
