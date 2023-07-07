
{{-- @dd($product) --}}

<div class=" w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    
   

    <a href="/details-produit/{{$product->idproducts}}">
        <img class=" object-contain h-60 w-96 p-8 rounded-t-lg"  src="{{ asset('img/' .$product->image_url) }}" alt="product image" />
    </a>

    {{-- value="{{$product->id}}" --}}
    </a>
    <div class=" px-5 pb-5">
        <a href="#">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                {{$product->name}}</h5>
        </a>

        <div class=" items-center justify-between">
            <span class=" text-3xl font-bold text-gray-900 dark:text-white">{{$product->price}}</span>

            <a href="#"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                to cart</a>
        </div>
    </div>
</div>