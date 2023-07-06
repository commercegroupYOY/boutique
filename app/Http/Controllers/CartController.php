<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index(): View
    {
        return View('/cart');
    }
}
