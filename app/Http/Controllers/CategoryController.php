<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\MessageProvider;
use Illuminate\Http\RedirectResponse;



class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        // dd($products->groupBy('categories_id'));

        return view('/backofficeCategories', ['categories' => $categories]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('/_backoffice/createCategories', ['categories' => $categories]);
    }


    public function edit(Category $category)
    {

        return view('_backoffice/updateCategory', ['category' => $category]);
    }





    /**
     * Display a listing of the resource.
     */


    public function store(Request $request)
    {


        $request->validate([
            'name' => ['required', 'max:150', 'min:3', 'unique:products', 'string'],
        ]);

        $newcategory = new Category();
        $newcategory->name = $request->name;


        $newcategory->save();

        return redirect()->route('backoffice.categories')
            ->with('success', 'La catégorie a bien était ajoutée');
    }


    public function destroy(Category $category)
    {

        $category->delete();

        return redirect()->route('backoffice.categories')
            ->with('success', 'La catégorie a bien était supprimée');
    }


    public function update(Category $category, Request $request)
    {
     
        $test = $request->validate([
            'name' => ['required', 'max:150', 'min:3', 'string'],
        ]);

        $category->update($test);

        // return redirect()->route('backoffice.categories')->with('success', 'Catégorie mise à jour');
        return redirect()->route('backoffice.categories'); 
        // ->status();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    public function indexlist (Category $category)
    {

     
        return view('/productlistcategory', ['category' => $category]);
    }
}
