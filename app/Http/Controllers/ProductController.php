<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\MessageProvider;



class ProductController extends Controller
{
    public function index() {
        return "Liste des produits";
    }

   

    public function productSheet($id): View
    {
        // $products = DB::table('products')->get();
        $product = DB::table('products')->where('id', $id)->get();
      
    
        return view('productDetail', ['product' => $product]);
    }

    public function productListName()
    {
        $products = Product::orderBy('name')->get(); 
        return view ('productListName', ['products' => $products]);
    }

    public function productListPrice()
    {

        $products = Product::orderBy('price')->get(); 
        return view ('productListPrice', ['products' => $products]);
    }


    public function edit(Product $product){

       
        return view ('_backoffice/updateProduct', ['product' => $product]);

        // $product = DB::table('products')->where('idproducts', $id)->get();
      
    
      
    
    }

    public function destroy (Product $product){

        $product->delete();
         
        return redirect()->route('backoffice')
                         ->with('success','Le produit a bien était supprimé');
        
    }


     
        // $product->update($request->all());
        
        // return redirect()->route('products.index')
        //                 ->with('success','Product updated successfully');

   

    public function catalogue(): View
    {
        // $products = DB::select('select * from products');        // requête simple
        
        $products = DB::table('products')->get();                    //requête SQL queries
       
        return View('product-list', ['products' => $products]);
    }

    public function showIds($id): View 
    {
        return View('product-details',['id'=>$id]);
    } 

    public function showId($id) : View
    {
        return View('product-details', ['id' => $id]);
    }

    public function update (Product $product, Request $request)
    {

       
       
     $request->validate([
        'name'=> ['required','max:150','min:3', 'unique:products','string'],
        'price'=>['required','min:0','integer'],
        'weight'=>['integer','min:0'],
        'image_url'=>['required','string'],
        'stock'=>['required','integer','min:0'],
        'available'=>['required','boolean'],
        // ['required','numeric','min:0','max:1'],
        'description'=>['max:1000','string'],
        'category_id'=>['required','integer']
       ]);


        $product->name = $request->name;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->image_url = $request->image_url;
        $product->stock = $request->stock;
        $product->available = $request->available;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        $product->update();
 
        return redirect('/liste-des-produits');
   
    }

    public function store(Request $request) 
{

    // $errors = $validator->errors();

     $request->validate([
    'name'=> ['required','max:150','min:3', 'unique:products','string'],
    'price'=>['required','min:0','integer'],
    'weight'=>['integer','min:0'],
    'image_url'=>['required','string'],
    'stock'=>['required','integer','min:0'],
    'available'=>['required','boolean'],
    // ['required','numeric','min:0','max:1'],
    'description'=>['max:1000','string'],
    'category_id'=>['required','integer']
   ]);

   
    $newproduct = new Product;
    $newproduct->name = $request->name;
    $newproduct->price = $request->price;
    $newproduct->weight = $request->weight;
    $newproduct->image_url = $request->image_url;
    $newproduct->stock = $request->stock;
    $newproduct->available = $request->available;
    $newproduct->description = $request->description;
    $newproduct->category_id = $request->category_id;

    $newproduct->save();

    return redirect('/liste-des-produits');

     //En donnat Product à manger je pourrait très bien utiliser mon medele et faire un Post::create([
        // 'name'=>$request_>name,  ETC ....
   

    
}
}

















// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         //



//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(StoreProductRequest $request)
//     {
//         


//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(Product $product)
//     {
//         
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Product $product)
//     {
//         
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(UpdateProductRequest $request, Product $product)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Product $product)
//     {
//         //
//     }
// }
