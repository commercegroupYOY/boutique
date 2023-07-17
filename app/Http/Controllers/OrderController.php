<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class OrderController extends Controller
{
    public function create(Request $request, Shipping $ship)
{
    $addresses = $request->user()->addresses()->get();
    if($addresses->isEmpty()) {
        // Là il faudra renvoyer l'utilisateur sur son compte quand on l'aura créé
    }
    $country_id = $addresses->first()->country_id;
    $shipping = $ship->compute($country_id);

    $content = Cart::getContent();
    $total = Cart::getTotal();
    $tax = Country::findOrFail($country_id)->tax;
    return view('command.index', compact('addresses', 'shipping', 'content', 'total', 'tax'));
}
}
