        @foreach ($product as $products)
<div class=" w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <form action="{{ url('Details_produit/'.$products->id) }}" method="">

        <input type="hidden" name="id" for="id" value="{{$products->id}}">
        <button type="submit" class="btn btn-primary"> <img class="p-8 rounded-t-lg" src="{{ $products->picture_url_yoy }}" alt="product image" /></button>
    </form>
    <div class=" px-5 pb-5">
        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
               {{ $products->name  }}</h5>

        <div class=" items-center justify-between">
            <span class=" text-3xl font-bold text-gray-900 dark:text-white">{{ $products->price  }}</span>

            <a href="#"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                to cart</a>
        </div>
    </div>
</div>
@endforeach
