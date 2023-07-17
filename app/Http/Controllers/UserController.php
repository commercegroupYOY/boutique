<?php

namespace App\Http\Controllers;

use App\Models\ModelsUser;
use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;

class BackUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UsersDataTable $dataTable)
{
    return $dataTable->render('back.shared.index');
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
    public function show(ModelsUser $modelsUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelsUser $modelsUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModelsUser $modelsUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelsUser $modelsUser)
    {
        //
    }
}
