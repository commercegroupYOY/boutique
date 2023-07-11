@extends('layout.layout')


@section('title')
Modifier un produit @endsection

@section('content')


<div class="p-20">
    <h1 class="text-center text-3xl text-blue-600"> Modifier un produit <br></h1>
</div>

{{-- {{dd($products)}} --}}


<form method="POST" action="{{ route('product.update', ['product'=>$product]) }}">
    {{ csrf_field() }}
    @method('put')

    <div class="p-5 bg-slate-50 w-1/2 mx-auto rounded-md mt-6">


        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Nom du
                produit</label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required name="name" value="{{$product->name}}">
        </div>
        
        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Prix du
                produit</label>
            <input type="number"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required name="price" value="{{$product->price}}">
        </div>

        <div class="mb-6">
            <label for="weight" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Poname du
                produit</label>
            <input type="number"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required name="weight" value="{{$product->weight}}">
        </div>

        <div class=" mb-6">
            <label for="image_url" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white"> Url
                de
                l'image
            </label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required name="image_url" value="{{$product->image_url}}">
        </div>

        <div class="mb-6">
            <label for="stock" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white" required>
                Quantité
            </label>
            <input type="stock"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required name="stock" value="{{$product->stock}}">
        </div>

        <div class=" mb-6">
            <select name="available" required>


                <option value="1"> Disponible</option>
                <option value="0"> Non-disponible</option>

            </select>
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white" required>
                Description du produit
            </label>
            <textarea rows="8"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                name="description">
            {{$product->description}}
            </textarea>

        </div>


        <div class=" mb-6">
            <select name="categories_idcategories" name="categories_idcategories" required>
                <option value="1"> Mamifère</option>
                <option value="2"> Insecte</option>
            </select>
        </div>


        <button type="submit"
            class="p-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Modifier le produit</button>

</form>

@endsection