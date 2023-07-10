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

  

    public function ProductSheet($id): View
    {
        // $products = DB::table('products')->get();
        $product = DB::table('products')->where('idproducts', $id)->get();
      
    
        return view('productDetail', ['product' => $product]);
    }

    public function ProductListName()
    {
        $products = Product::orderBy('name')->get(); 
        return view ('productListName', ['products' => $products]);
    }

    public function ProductListPrice()
    {

        $products = Product::orderBy('price')->get(); 
        return view ('productListPrice', ['products' => $products]);
    }

    public function CreateProduct(){

        ;
    }

    public function UpdateProduct(){

        ;
    }

    public function DeleteProduct(){

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

}
