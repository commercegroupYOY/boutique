<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index() {
        return "Liste_des_produits";
    }

    public function ProductSheet(): View
    {
        return View('/ProductDetail');

    }

    public function catalogue(): View
    {
        return View('/product-list');
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
