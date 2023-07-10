@extends('layout.layout')


@section('title')
Modifier un produit @endsection

@section('content')
<div class="p-20">
    <h1 class="text-center text-3xl text-blue-600">Mise à jour d'un produit <br></h1>
</div>
    {{-- <div class="text-center text-xl">vous aimez de retro gaming ?<br>
        découvrez une large sélection de console et de jeux vidéos ! <br>
        pensez aussi à regarder nos vidéos sur YouTube et à nous suivre sur les réseaux sociaux <br>
    </div> --}}




    <div class="p-20">
        <h1 class="text-center text-3xl text-blue-600">Ajouter un produit<br></h1>
    </div>
    
    {{-- {{dd($products)}} --}}
    
    <form method="POST" action="/products">
    
        {{ csrf_field() }}
    
        <select name="product" id="product" required>
    
            @foreach($products as $product)
            <option value={{$product->name }}> {{$product->name }}</option>
            @endforeach
        </select>
    
        <input type="number" name="price" placeholder="Prix" required>
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Valider</button>
    </form>
    
    
    <form method="POST" action="/products">
    
        <div class="p-5 bg-slate-50 w-1/2 mx-auto rounded-md mt-6">
            <div class="mb-6">
                <select name="product" id="product" required>
    
                    @foreach($products as $product)
                    <option value={{$product->name }}> {{$product->name }}</option>
                    @endforeach
                </select>
                <label for="email" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Your email</label>
                <input type="VARCHAR" id=""
                    class="bg-gray-50 border border-gray-300 text-blue-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Your
                    password</label>
                <input type="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required placeholder="............">
    
            </div>
            <div class="flex items-start mb-0">
                <div class="flex items-center h-1">
    
                </div>
            </div>
    
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Leave a comment..."></textarea>
    
            <button type="submit"
                class="p-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
    </div>
    
    {{-- <form method="POST" action="/products">
    
        <label for="product"> Sélectionner un produit :</label>
    
    
    
    
        {{--
        <!-- Ajoutez d'autres listes déroulantes pour les attributs que vous souhaitez modifier -->
        <label for="name">Nom :</label>
        <select name="name" id="name">
            <option value="new_name_1">Nouveau nom 1</option>
            <option value="new_name_2">Nouveau nom 2</option>
            <!-- Ajoutez les autres options nécessaires -->
        </select>
    
        <label for="price">Prix :</label>
        <select name="price" id="price">
            <option value="new_price_1">Nouveau prix 1</option>
            <option value="new_price_2">Nouveau prix 2</option>
            <!-- Ajoutez les autres options nécessaires -->
        </select>
    
        <!-- Ajoutez d'autres listes déroulantes pour les autres attributs que vous souhaitez modifier --> --}}
    
        <button type="submit">Mettre à jour</button>
    </form>


    @endsection