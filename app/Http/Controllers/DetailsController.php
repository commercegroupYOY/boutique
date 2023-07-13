<?php

namespace App\Http\Controllers;

use App\Models\User;

class DetailsController extends Controller
{
    public function index()

    {
        $user=user::all();
        dd($user);
        return view('Includs._product.comandresume',  ['user' => $user]);
    }

}
