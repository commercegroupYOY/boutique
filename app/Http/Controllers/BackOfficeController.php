<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class BackOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $products = Product::all();

        return View('layouts/_backOffice/backoffice', compact('products'));


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('layouts/_backOffice/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([

            'name' => 'required',

            'price' => 'required',

            'description' => 'required',

            'quantity' => 'required',

            'sell' => 'required',

            'category' => 'required',

        ]);



        Product::create($request->all());



        return redirect()->route('products.index')

            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): View

    {

        return view('layouts/_backOffice/show', compact('product'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product): View

    {

        return view('layouts/_backOffice/edit', compact('product'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product): RedirectResponse

    {

        $request->validate([

            'name' => 'required',

            'price' => 'required',

            'description' => 'required',

            'quantity' => 'required',

            'sell' => 'required',

            'category' => 'required',

        ]);
        $product->update($request->all());



        return redirect()->route('products.index')

            ->with('succès', 'Produit mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): RedirectResponse

    {

        $product->delete();



        return redirect()->route('products.index')

                        ->with('succès','Produit supprimé');
    }
}
