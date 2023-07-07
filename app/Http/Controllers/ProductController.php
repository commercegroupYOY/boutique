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

    public function ProductSheet(): View
    {
        return View('/ProductDetail');

    }

    public function catalogue(): View
    {
        $products = DB::table('products')->get();
        $products = DB::select('select * from products');

        return View('/product-list', ['products' => $products]);
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
