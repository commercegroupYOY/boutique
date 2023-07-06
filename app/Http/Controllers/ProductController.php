<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index() {
        return "Liste des produits";
    }

    public function ProductSheet(): View
    {
        return View('/layout.ProductDetail');

    }

    public function catalogue(): View
    {
        return View('/layout.product-list');
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
