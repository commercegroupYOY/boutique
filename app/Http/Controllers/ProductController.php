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

    public function edit(Product $product){

       
        return view ('_backoffice/updateProduct', ['product' => $product]);

        // $product = DB::table('products')->where('idproducts', $id)->get();
      
    
      
    
    }

    // public function destroy(Product $product){

    //     $product->delete();
         
    //     return redirect()->route('products.index')
    //                     ->with('success','Le produit a bien était supprimé');
    //     ;
    // }


     
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

        // $updateproduct = Product::find($product);

        $product->name = $request->name;
        $product->price = $request->price;
    $product->weight = $request->weight;
    $product->image_url = $request->image_url;
        $product->stock = $request->stock;
        $product->available = $request->available;
        $product->description = $request->description;
        $product->categories_idcategories = $request->categories_idcategories;

        $product->update();
 
        return redirect('/liste-des-produits');
   
    }
}
