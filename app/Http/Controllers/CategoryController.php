<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\MessageProvider;



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


    public function update (Category $category, Request $request)
    {
        echo $request->name;

        // $category=Category::find($id);

        $request->validate([
            'name' => ['required', 'max:150', 'min:3', 'string'],
        ]);

        //  dd($category);

        $category->name = $request->name;


        $category->update();

//  dd($category);

return redirect() ->route('backoffice.categories')->with('success', 'Catégorie mise à jour');


    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
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
