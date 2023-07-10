@extends('layout.layout')


@section('title')
Ajouter un produit @endsection

@section('content')


@section('content')
<div class="p-20">
    <h1 class="text-center text-3xl text-blue-600">Ajouter un produit<br></h1>
</div>

{{-- {{dd($products)}} --}}

<form method="POST" action="/products">

    {{ csrf_field() }}


    <div class="p-5 bg-slate-50 w-1/2 mx-auto rounded-md mt-6">
        <div class="mb-6">

            <label for="name" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Nom du
                produit</label>
            <input type="VARCHAR" id="name"
                class="bg-gray-50 border border-gray-300 text-blue-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Perdrix ..." required>
        </div>

        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Prix du
                produit</label>
            <input type="number" id="price"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required placeholder="12300...">

        </div>

        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Poid du
                produit</label>
            <input type="number" id="price"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required placeholder="30..."">

        </div>

        <div class=" mb-6">
            <label for="image_url" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white"> Url de l'image
            </label>
            <input type="text" id="image_url"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required placeholder="............">

        </div>

        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white" required> Quantité </label>
            <input type="number" id="price"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required placeholder="30..."">

        </div>

        <div class=" mb-6">
            <select name="avaible" id="avaible" required>


                <option value="1"> Disponible</option>
                <option value="0"> Non-disponible</option>

            </select>
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white" required> Description du produit
            </label>
            <textarea id="description" rows="8"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Entrer la description du produit ici ..."></textarea>

        </div>


        <div class=" mb-6">
            <select name="categories_idcategories" id="categories_idcategories" required>


                <option value="1"> Mamifère</option>
                <option value="2"> Insecte</option>

            </select>
        </div>


    <button type="submit"
     class="p-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
     Envoyer</button>

</form>


@endsection