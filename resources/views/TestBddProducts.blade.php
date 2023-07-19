@extends('layout.layout')




@section('title')
Notre équipe @endsection

@section('content')


 foreach ($categories as $category) {
    echo "Catégorie : " . $category->name . "<br>";
    
    foreach ($category->products as $product) {
        echo "Produit : " . $product->name . "<br>";
    }


    @endsection