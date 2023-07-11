<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Products;

class CartController extends Controller
{

    public function index(): View
    {
        $product = Products::all();

         return View('includs/_product/cart', ['product' => $product]);

    }

    public function cart($id)
    {
        $product = DB::select('select * from product where id = ' . $id);
        return view('Includs/_product/cart', ['product' => $product]);
    }
}
