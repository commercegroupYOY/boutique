@extends('layout.layout')


@section('title')
Tous les produits @endsection

@section('content')

@foreach($products as $product)
    
{{$product->name}} : a un prix de {{$product->price}} <br>

@endforeach


 @endsection

