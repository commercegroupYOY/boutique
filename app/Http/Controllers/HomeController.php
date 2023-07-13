<?php

namespace App\Http\Controllers;


use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Product;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\MessageProvider;




class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {

        $imgCarousel = [
            [
                'name'=>'Sega Megadrive 2',
                'img'=>'public/img//megadrive2.jpg'
            ],
            [
                'name'=>'Sega Megadrive 2',
                'img'=>'public/img//megadrive2.jpg'
            ]
        ];

        return View('/homepage', ['imgs'=>$imgCarousel]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


 
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

  
}

