@extends('layout.layout')


@section('title')
Ajouter un produit @endsection

@section('content')


@section('content')
<div class="p-20">
    <h1 class="text-center text-3xl text-blue-600">Ajouter une catégorie<br></h1>
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

<form method="POST" action="{{route('categories.store')}}">

    {{ csrf_field() }}


    <div class="p-5 bg-slate-50 w-1/2 mx-auto rounded-md mt-6">


        <div class="mb-6">

            <label for="name" class="block mb-2 text-sm font-medium text-blue-600">Nom de la catédorie</label>

            <input type="text
                class=" bg-gray-50 border border-gray-300 text-blue-600 text-sm rounded-lg focus:ring-blue-500
                focus:border-blue-500 block w-full p-2.5
               " placeholder="amphibien ..." required
                id="name" name="name">
        </div>



        <button type="submit"
            class="p-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Envoyer</button>

</form>


@endsection
