<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ErrorController extends Controller
{


    public function indexlist($id)
    {
        $category = Category::findOrFail($id, 'Aucun résultat pour cette requête');


        return back()->with('message', 'Erreur 404');
    }
}
