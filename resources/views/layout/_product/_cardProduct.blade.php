

        @foreach ($products as $product)
<div class=" w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <form action="{{ url('Details_produit/'.$product->id) }}" method="">
        <input type="hidden" name="id" for="id" value="{{$product->id}}">
        <button type="submit" class="btn btn-primary"> <img class="p-8 rounded-t-lg" src="/{{ $product->picture_url_yoy }}" alt="product image" /></button>
    </form>
    <div class=" px-5 pb-5">
        <h5 class="text-xl font-semibold tracking-tight text-gray-900">
               {{ $product->name  }}</h5>

        <div class=" items-center justify-between">
            <span class=" text-3xl font-bold text-gray-900">{{ $product->price }}</span>

            <a href="#"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add
                to cart</a>
        </div>
    </div>
</div>
@endforeach
