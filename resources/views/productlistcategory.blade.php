@extends('layout.layout')

@section('title')
Liste des produits par catégorie
@endsection



@section('content')
<div class="py-8">
    <h1 class="text-2xl text-center ps-10"> Notre sélection de produit par catégorie</h1>
</div>



<div class=" grid grid-cols-1  gap-4  md:grid-cols-2 lg:grid-cols-4 ">


    @forelse($category->products as $product)


    @include('_product._cardProduct')

    @empty
    <span> Auncun produit pour cette catégorie</span>

    @endforelse





</div>




@endsection