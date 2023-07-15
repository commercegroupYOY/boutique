@extends('layout.layout')


@section('title')
Modifier un produit @endsection

@section('content')


<div class="p-20">
    <h1 class="text-center text-3xl text-blue-600"> Modifier une catégorie<br></h1>
</div>

{{-- {{dd($category)}} --}}


{{-- @if ($errors->any())

<div class="text-red-900">
    @foreach ($errors->all() as $error)
    {{ $error }}
    @endforeach
</div>

@endif --}}

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<form method="POST" action= "{{ route('category.update' , ['category' => $category])}}">

    {{ csrf_field() }}
    @method('put')

    <div class="p-5 bg-slate-50 w-1/2 mx-auto rounded-md mt-6">


        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-blue-600">Changer le nom de la catégorie</label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                name="name" value="{{$category->name}}">
        </div>



        <button type="submit"
            class="p-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Modifier le produit</button>

</form>

@endsection
