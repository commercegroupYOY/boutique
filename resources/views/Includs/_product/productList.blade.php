@extends('layouts.layout')

@section('title')
    Liste des produits
@endsection

@section('content')
    <div class="py-8 flex-auto">

        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="flex flex-row items-center  font-semibold text-left bg-transparent dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 hover:text-gray-900 focus:text-blue-600 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                <span t>Catégorie</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{ 'rotate-180': open, 'rotate-0': !open }"
                    class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                <div class=" bg-white  shadow dark-mode:bg-gray-800">
                    <a class="block px-4 py-2 mt-2 font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-blue-600 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="/productList/console">Console</a>
                    <a class="block px-4 py-2 mt-2 font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-blue-600 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="/productList/jeux-video">Jeux-vidéos</a>
                    <a class="block px-4 py-2 mt-2 font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-blue-600 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="/productList/merchandising">Merchandising</a>
                </div>
            </div>
        </div>

        <h1 class="text-2xl text-center ps-10"> Notre sélection de produit pour vous </h1>
        <a href="/orderByNamedesc"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">trier
            par nom décroissant</a>

        <a href="/orderByNameasc"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">trier
            par nom croissant</a>

        <a href="/orderByPricedesc"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">trier
            par prix décroissant</a>

        <a href="/orderByPriceasc"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">trier
            par prix croissant</a>
            <a href="/orderByid"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">trier
            par défaut</a>
    </div>
    <div class=" grid grid-cols-1  gap-4  md:grid-cols-2 lg:grid-cols-4 ">

        @include('Includs._product._cardProduct')

    </div>
@endsection
