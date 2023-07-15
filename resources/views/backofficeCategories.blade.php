@extends('layout.layout')


@section('title')
backoffice Du site @endsection

@section('content')

{{-- {{ dd($categories) }}; --}}


<div class="flex -row p-5 w-1/2 mx-15 rounded-md mt-6 mb-30 text-gray-900 bg-gray-200">
    <div>
        <h2 class="pr-10 text-3xl">Ajouter une catégorie :</h2>
    </div>
    <div>
        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none"
            href="{{route('categories.create')}}"> Ajouter une catégorie  </a>
    </div>
</div>
</div>



<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Supprimer ou Modifier des données
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">

{{-- {{ dd($categories) }} --}}


        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                @foreach ($categories as $category)

                <tr class="border-b">
                    <th class="text-left p-3 px-5">ID</th>
                    <th class="text-left p-3 px-5">Name</th>
                    <th></th>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="{{$category->id}}" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="{{$category->name}}" class="bg-transparent"></td>

                    <td class="p-3 px-5 flex justify-end">

                        <a href="/backoffice/{{$category->id}}/edit/" type="button" type="button"
                            class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                            Modifier la catégorie</a>



                        <form action="{{ route('category.delete', ['category'=>$category->id]) }}" method="post" onclick="return confirm('Etes vous sur de vouloir supprimer ce produit')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="mr-3 text-sm bg-red-500 hover:bg-black-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Supprimer la catégorie</button>
                        </form>

                    </td>
                </tr>



                @endforeach

            </tbody>
        </table>


    </div>
</div>






@endsection
