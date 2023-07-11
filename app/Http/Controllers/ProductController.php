<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProductController extends Controller
{
    public function index() {
        return "Liste des produits";
    }

  

    public function productSheet($id): View
    {
        // $products = DB::table('products')->get();
        $product = DB::table('products')->where('idproducts', $id)->get();
      
    
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

    public function createProduct(){

        ;
    }

    public function updateProduct(){

        ;
    }

    public function deleteProduct(){

        ;
    }



   

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

    public function update (Request $request)
    {
        $updateproduct = Flight::find(1);

        $updateproduct->name = $request->name;
        $newproduct->price = $request->price;
        $newproduct->weight = $request->weight;
        $newproduct->image_url = $request->image_url;
        $newproduct->stock = $request->stock;
        $newproduct->available = $request->available;
        $newproduct->description = $request->description;
        $newproduct->categories_idcategories = $request->categories_idcategories;

        $newproduct->save();
 
        $updateproduct->name = 'Paris to London';
 
        $updateproduct->save();
    }
}
