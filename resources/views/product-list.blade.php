@extends('layout.layout')

@section('title')
Liste des produits @endsection

@section('Homecontent')

<div class="py-8"></div>
<h1 class="text-2xl text-center ps-10"> Notre sélection de produit pour vous</h1>
</div>
@endsection


@section('allProducts')

<div class=" grid grid-cols-1  gap-4  md:grid-cols-2 lg:grid-cols-4 ">

    @for ($i = 0; $i < 20; $i++)
    @include('_product._cardProduct')

@endfor

</div>




@endsection





{{-- @section('toolbar')

<div class="inline-flex-cen rounded-md shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
    role="toolbar">
    <button type="button"
        class="inline-block rounded-l bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-600 focus:bg-primary-600 focus:outline-none focus:ring-0 active:bg-primary-700"
        data-te-ripple-init data-te-ripple-color="light">
        1
    </button>
    <button type="button"
        class="inline-block bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-600 focus:bg-primary-600 focus:outline-none focus:ring-0 active:bg-primary-700"
        data-te-ripple-init data-te-ripple-color="light">
        2
    </button>
    <button type="button"
        class="inline-block bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-600 focus:bg-primary-600 focus:outline-none focus:ring-0 active:bg-primary-700"
        data-te-ripple-init data-te-ripple-color="light">
        3
    </button>
    <button type="button"
        class="inline-block bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-600 focus:bg-primary-600 focus:outline-none focus:ring-0 active:bg-primary-700"
        data-te-ripple-init data-te-ripple-color="light">
        4
    </button>
    <button type="button"
        class="inline-block rounded-r bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white transition duration-150 ease-in-out hover:bg-primary-600 focus:bg-primary-600 focus:outline-none focus:ring-0 active:bg-primary-700"
        data-te-ripple-init data-te-ripple-color="light">
        5
    </button>
</div>
@endsection --}}