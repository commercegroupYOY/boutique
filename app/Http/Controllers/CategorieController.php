<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\MessageProvider;


class CategorieController extends Controller
{

    public function edit()
    {

        $categories = Categorie::all();
        return view('/_backoffice/updateCategories', ['categories' => $categories]);
    }



    public function create()
    {
        $products = Categorie::all();
        return view('/_backoffice/createCategories', ['products' => $products]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function store(Request $request)
    {

        $newcategory = new Categorie();
        $newcategory->name = $request->name;


        $newcategory->save();

        return redirect()->route('categorielist')
             ->with('success', 'La catégorie a bien était ajoutée');
    }

    
    public function destroy(Categorie $categories)
    {

        $categories->delete();

        return redirect()->route('categorielist')
            ->with('success', 'La catégorie a bien était supprimée');
    }


    public function update(Categorie $categories, Request $request)
    {

        $request->validate([
            'name' => ['required', 'max:150', 'min:3', 'unique:products', 'string'],

        ]);


        $categories->name = $request->name;


        $categories->update();

        return redirect()->route('categorielist')
                 ->with('success', 'Catégorie mis à jour');
    }


    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Categorie $categorie)
    // {
    //     //
    // }



    /**
     * Remove the specified resource from storage.
     */
}
