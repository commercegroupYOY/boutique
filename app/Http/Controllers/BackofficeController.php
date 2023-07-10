<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackofficeController extends Controller
{
    public function ShowCreate(){
        $products = DB::table('products')->get();                    //requête SQL queries
        return view('/_backoffice/createProduct', ['products' => $products]);
    }
    public function ShowUpdate(){

        return view('/_backoffice/updateProduct');
    }
    public function ShowDelete(){

        return view('/_backoffice/deleteProduct');
    }


    public function Backoffice()
    {

        return view ('backoffice');
    }
}
