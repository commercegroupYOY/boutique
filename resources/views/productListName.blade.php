@extends('layout.layout')


@section('title')
Tous les produits @endsection

@section('content')

@foreach($products as $product)
    
{{$product->name}} <br>

@endforeach


 @endsection

