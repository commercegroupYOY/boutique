<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index() {
        return "Liste des produits";
    }


    public function ProductSheet($id): View
    {
        $products = DB::table('products')->get();
        $product = DB::table('products')->where('idproducts', $id)->get();
      
    
        return view('productDetail', ['product' => $product]);
    }


    public function catalogue(): View
    {
        $products = DB::table('products')->get();
        $products = DB::select('select * from products');

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
