@extends('layout.layout')


@section('title')
Ajouter un produit @endsection

@section('content')


@section('content')
<div class="p-20">
    <h1 class="text-center text-3xl text-blue-600">Ajouter un produit<br></h1>
</div>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{-- {{dd($products)}} --}}

<form method="POST" action="/liste-des-produits-ajout">

    {{ csrf_field() }}


    <div class="p-5 bg-slate-50 w-1/2 mx-auto rounded-md mt-6">


        <div class="mb-6">

            <label for="name" class="block mb-2 text-sm font-medium text-blue-600">Nom du
                produit</label>
                
            <input type="text 
                class=" bg-gray-50 border border-gray-300 text-blue-600 text-sm rounded-lg focus:ring-blue-500
                focus:border-blue-500 block w-full p-2.5
               " placeholder="Perdrix ..." required
                id="name" name="name">
        </div>

        <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium text-blue-600">Prix du
                produit</label>
            <input type="number"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="12300..." required id="price" name="price">
        </div>

        <div class="mb-6">
            <label for="weight" class="block mb-2 text-sm font-medium text-blue-600">Poid du
                produit</label>
            <input type="number"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="30..." required id="weight" name="weight">
        </div>

        <div class=" mb-6">
            <label for="image_url" class="block mb-2 text-sm font-medium text-blue-600"> Url de l'image
            </label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required placeholder="............" id="image_url" name="image_url">
        </div>

        <div class="mb-6">
            <label for="stock" class="block mb-2 text-sm font-medium text-blue-600" required> Quantité
            </label>
            <input type="stock"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required placeholder="30..." id="stock" name="stock">
        </div>

        <div class=" mb-6">
            <select name="available" id="available" required>


                <option value="1"> Disponible</option>
                <option value="0"> Non-disponible</option>

            </select>
        </div>

        <div class="mb-6">
            <label for="description" class="block mb-2 text-sm font-medium text-blue-600" required>
                Description du produit
            </label>
            <textarea rows="8"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                placeholder="Entrer la description du produit ici ..." id="description" name="description">
            </textarea>

        </div>


        <div class=" mb-6">
            <select name="category_id" id="category_id" required>
                <option value="1"> Mamifère</option>
                <option value="2"> Insecte</option>
            </select>
        </div>


        <button type="submit"
            class="p-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Envoyer</button>

</form>


@endsection