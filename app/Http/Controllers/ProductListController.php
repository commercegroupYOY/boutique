<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductListController extends Controller
{

    public function productsList()
    {
        $products = Products::all();

        return view('/Includs/_product/productList', ['products' => $products]);
    }

    public function productSheet($id)
    {
        $product = Products::find($id);
        return view('Includs/_product/productDetail', ['product' => $product]);
    }

    public function productListCat($categoryName)
    {
        $products = Products::where('category', $categoryName)->get();

        return view('Includs/_product/productList', ['products' => $products]);
    }

    public function orderpricedesc()
    {
        $products = Products::orderBy('price', 'desc')->get();

        return view('Includs/_product/productList', ['products' => $products]);

    }

    public function orderpriceasc()
    {
        $products = Products::orderBy('price', 'asc')->get();

        return view('Includs/_product/productList', ['products' => $products]);

    }

    public function ordernamedesc()
    {
        $products = Products::orderBy('name', 'desc')->get();

        return view('Includs/_product/productList', ['products' => $products]);

    }

    public function ordernameasc()
    {
        $products = Products::orderBy('name', 'asc')->get();

        return view('Includs/_product/productList', ['products' => $products]);

    }

    public function orderid()
    {
        $products = Products::orderBy('id', 'asc')->get();

        return view('Includs/_product/productList', ['products' => $products]);

    }

}
