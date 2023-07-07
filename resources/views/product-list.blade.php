@extends('layout.layout')

@section('title')
    Liste des produits
@endsection

@section('content')
    <div class="py-8">
        <h1 class="text-2xl text-center ps-10"> Notre sélection de produit pour vous</h1>
    </div>
    <div class=" grid grid-cols-1  gap-4  md:grid-cols-2 lg:grid-cols-4 ">

            @include('layout._product._cardProduct')

    </div>
@endsection
