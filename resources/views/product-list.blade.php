@extends('layout.layout')

@section('title')
Liste des produits @endsection

@section('content')
<div class="py-8">
    <h1 class="text-2xl text-center ps-10"> Notre sélection de produit pour vous</h1>
</div>






 <div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium text-blue-600">
        Sélection de produits par catégorie
    </label>

    @foreach ($categories as $category)

    <a href="/product-list/category/{{$category->id}}" type="button" 
        class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
        {{$category->name}}</a> 
    @endforeach
</div> 

{{-- Au pire ça ça marche  --}}

{{-- <div class="mb-6">
    <label for="name" class="block mb-2 text-sm font-medium text-blue-600">
        Sélection de produits par catégorie
    </label>

    @foreach ($categories as $category)
        <form method="get" action="{{ route('productlist.category', ['categoryname' => $category->name]) }}">
            {{ csrf_field() }}
            <select name="categoryname" required>
                <option value="{{ $category->name }}">{{ $category->name }}</option>
            </select>
            <button type="submit">Valider</button>
        </form>
    @endforeach
</div>  --}}




    {{-- {{ dd($categories) }} --}}


        {{-- @foreach ($categories->products as $product)

            {{ $product->name }}
        {{-- @include('_product._cardProduct') --}}

        {{-- @endforeach --}}




        <div class=" grid grid-cols-1  gap-4  md:grid-cols-2 lg:grid-cols-4 ">

    @foreach ($products as $product)

    @if ($product->stock > 0)
    
    @include('_product._cardProduct')
  
    @endif

 
    @endforeach

</div>




@endsection


