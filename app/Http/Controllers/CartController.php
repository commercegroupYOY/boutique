<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart($id)
    {
        $product = DB::select('select * from product where id = ' . $id);
        return view('cart', ['product' => $product]);
    }
}
