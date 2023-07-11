@extends('layouts.layout')
    @section('title')
        {{ $product->name }}
    @endsection
    @section('content')
        {{-- @dump(asset ( $product->picture_url_yoy)) --}}

        <div class="py-8">
            <h1 class="text-2xl text-center ps-10"> {{ $product->name }} </h1>
        </div>
        <section class="text-gray-700 body-font overflow-hidden bg-white">
            <div class="container px-5 py-24 mx-auto">
                <div class="lg:w-4/5 mx-auto flex flex-wrap">
                    <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                        src=" /{{ $product->picture_url_yoy }} ">
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $product->category }}</h2>
                        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $product->name }}</h1>

                        <div class="flex mb-4">
                        </div>

                        <p class="leading-relaxed">{{ $product->description }}</p>
                        <div class="mt-5 container flex">
                            <span class=" flex-1 title-font font-medium text-2xl text-gray-900">{{ $product->price }}
                            </span>
                            <button class="flex-1 items-center justify-between">
                                <a href="/cart"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">ajouter au panier</a>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
            </div>
        </section>

@endsection
