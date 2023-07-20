<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Address, Country, State, Product, Order};
use App\Services\Shipping;
use Illuminate\Support\Str;

use Cart;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\Shipping  $ship
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Shipping $ship)
    {

        $user = $request->user();
        $addresses = $user->addresses;

        if (empty($addresses)) {
            // Là il faudra renvoyer l'utilisateur sur son compte quand on l'aura créé
        }


        $country_id = $addresses->first()->country_id;

        $shipping = $ship->compute($country_id);

        $content = session()->get('cart');

        $total = ('cart')::getTotal();


        $tax = Country::findOrFail($country_id)->tax;

        return view('Includs\command\comandresume', compact('user', 'addresses', 'shipping', 'content', 'total', 'tax'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services\Shipping  $ship
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Shipping $ship)
    {
        // Vérification du stock
        $items = session()->get('cart');

        foreach ($items as $row)
        {
            $product = Product::findOrFail($row['idProduct']);
            if ($product->quantity < $row['quantity'])
            {
                return view('Includs._product.cart')->with('message','Nous sommes désolés mais le produit "' . $row['name'] . '" ne dispose pas d\'un stock suffisant pour satisfaire votre demande. Il ne nous reste plus que ' . $product->quantity . ' exemplaires disponibles.');
            }
        }


        // Client
        $user = $request->user();

        // Facturation
        $address_facturation = Address::with('country')->findOrFail($request->facturation);

        // Livraison
        $address_livraison = $request->different ? Address::with('country')->findOrFail($request->livraison) : $address_facturation;
        $shipping = $request->expedition === 'colissimo' ? $ship->compute($address_livraison->country->id) : 0;

        // TVA
        $tvaBase = Country::whereName('France')->first()->tax;
        $tax = $request->expedition === 'colissimo' ? $address_livraison->country->tax : $tvaBase;

        // Enregistrement commande
        $order = Order::create([
            'reference' => strtoupper(Str::random(8)),
            'shipping' => $shipping,
            'tax' => (float)$tax,
            'total' => $tax > 0 ? ('cart')::getTotal() : ('cart')::getTotal() / (1 + $tvaBase),
            'payment' => $request->payment,
            'pick' => $request->expedition === 'retrait',
            'state_id' => State::whereSlug($request->payment)->first()->id,
            'user_id' => $user->id
        ]);


        // Enregistrement adresse de facturation
        $order->adresses()->create($address_facturation->toArray());

        // Enregistrement éventuel adresse de livraison
        if ($request->different) {
            $address_livraison->facturation = false;
            $order->adresses()->create($address_livraison->toArray());
        }

        // Enregistrement des produits
        foreach ($items as $row) {
            $order->products()->create(
                [
                    'name' => $row['name'],
                    'total_price_gross' => ($tax > 0 ? $row['price'] : $row['price'] / (1 + $tvaBase)) * $row['quantity'],
                    'quantity' => $row['quantity'],
                ]
            );
            // Mise à jour du stock
            $product = Product::findOrFail($row['idProduct']);
            $product['quantity'] -= $row['quantity'];
            $product->save();
            // Alerte stock
            if ($product['quantity'] <= $product['quantity_alert']) {
                // Notifications à prévoir pour les administrateurs
            }
        }

        // On vide le panier
        session()->forget('cart');

        // Notifications à prévoir pour les administrateurs et l'utilisateur
       return redirect()->route('commandes.confirmation',['order'=> $order->id]);
    }
}
