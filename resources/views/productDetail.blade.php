@extends('layout.layout')


@section('title')
    Le titre du produit
@endsection

@section('content')


{{-- {{dd($product)}} --}}

@foreach ($product as $item)


    




<div class="py-8">
        <h1 class="text-2xl text-center ps-10"> {{$item->name}} </h1>
    </div>
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200"
                src="{{ asset('img/' .$item->image_url) }}"
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">BRAND NAME</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">The Catcher in the Rye</h1>

                    <div class="flex mb-4">
                    </div>

                    <p class="leading-relaxed">{{$item->description}}</p>

                </div>
                <div class="mt-5 container flex">
                    <span class=" flex-1 title-font font-medium text-2xl text-gray-900">{{$item->price}} €</span>
                    <button class="flex-1 items-center justify-between">
                        <a href="#"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add
                            to cart</a>
                    </button>
                    <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
              </svg>
            </button>
                 </div>
            </div>
        </div>
        </div>
    </section>

    @endforeach

    @endsection 