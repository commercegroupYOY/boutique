
{{-- @dd($product) --}}

<div class=" w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    
   

    <a href="/details-produit/{{$product->id}}">
        @if ($product->available ==1)
        <img class=" object-contain h-60 w-96 p-8 rounded-t-lg"  src="{{ asset('img/' .$product->image_url) }}" alt="product image" />
        @else 
        <img class=" opacity-25 marker:object-contain h-60 w-96 p-8 rounded-t-lg"   src="{{ asset('img/' .$product->image_url) }}" alt="product image" />
        @endif
    </a>

    {{-- value="{{$product->id}}" --}}
    </a>
    <div class=" px-5 pb-5">
        <a href="#">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900">
                {{Str::ucfirst($product->name) }}</h5>
        </a>

        <div class=" items-center justify-between">
            <span class=" text-3xl font-bold text-gray-900">{{$product->price}}</span>

            @if ($product->available==1)
            <a href="#"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add
                to cart</a>
            @else 
            <a href="#"
                class="text-white opacity-25 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Non disponinle
                to cart</a>
                
             @endif

        </div>
    </div>
</div>