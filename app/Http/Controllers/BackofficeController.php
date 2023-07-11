<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackofficeController extends Controller
{

    
    public function index() {

        $products=Product::all();
        dd($products->groupBy('categories_idcategories'));
        return view('backoffice', ['products' => $products]);
            
        }
    public function showCreate()
    {
        $products = Product::all();
        return view('/_backoffice/createProduct', ['products' => $products]);
    }
    public function showUpdate(){

        $products = Product::all();
        return view('/_backoffice/updateProduct', ['products' => $products]);
    }
    public function showDelete(){

        return view('/_backoffice/deleteProduct');
    }


    public function backoffice()
    {

        return view ('backoffice');
    }


    public function storeCreate(Request $request) 
        {

            $newproduct = new Product;

            $newproduct->name = $request->name;
            $newproduct->price = $request->price;
            $newproduct->weight = $request->weight;
            $newproduct->image_url = $request->image_url;
            $newproduct->stock = $request->stock;
            $newproduct->available = $request->available;
            $newproduct->description = $request->description;
            $newproduct->categories_idcategories = $request->categories_idcategories;

            $newproduct->save();

             return redirect('/liste-des-produits');

   
             

  
        //    $newProduct = Produc::create(



        //    $request->save();

        //    $request->session()->flash('status', 'Task was successful!');
          
           
        //    return redirect('/product-list');
        }

    
    
}
