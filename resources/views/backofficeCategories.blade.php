@extends('layout.layout')


@section('title')
backoffice Du site @endsection

@section('content')




<div class="flex -row p-5 w-1/2 mx-15 rounded-md mt-6 mb-30 text-gray-900 bg-gray-200">
    <div>
        <h2 class="pr-10 text-3xl">Ajouter une catégorie :</h2>
    </div>
    <div>
        <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none"
            href="/backoffice/Create"> Ajouter une catégorie  </a>
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




        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                @foreach($products as $product)
                <tr class="border-b">
                    <th class="text-left p-3 px-5">ID</th>
                    <th class="text-left p-3 px-5">Name</th>
                    <th></th>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="{{$product->id}}" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="{{$product->name}}" class="bg-transparent"></td>

                    <td class="p-3 px-5 flex justify-end">

                        <a href="/backoffice/product/{{$product->id}}/edit" type="button"
                            class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Modifier le produit</a>



                         <form action="{{ route('product.delete', ['product'=>$product])}}" method="post" onclick="return confirm('Etes vous sur de vouloir supprimer ce produit')">
                            @csrf
                            @method('delete')
                            {{-- <input type="submit" class="" value="Supprimer"> --}}
                            <button type="submit" class="mr-3 text-sm bg-red-500 hover:bg-black-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Supprimer le produit</button>
                        </form>

                    </td>
                </tr>



                @endforeach
            </tbody>
        </table>


    </div>
</div>


@endsection
