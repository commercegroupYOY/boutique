@extends('layouts.layout')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
@section('content')
    <div class="mx-auto">
        <img src="{{ asset('img/entete.png') }}" class="mx-auto" alt="en-tête">
    </div>
@section('title')
    back Office
@endsection

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2> voir produit</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('products.index') }}"> retour</a>

        </div>

    </div>

</div>



<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Name:</strong>

            {{ $product->name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>picture:</strong>

            {{ $product->picture_url_yoy }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>prix:</strong>

            {{ $product->price }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>discount:</strong>

            {{ $product->discount }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>poids:</strong>

            {{ $product->weight }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>description:</strong>

            {{ $product->description }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>quantité:</strong>

            {{ $product->quantity }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>sell:</strong>

            {{ $product->sell }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>category:</strong>

            {{ $product->category }}

        </div>

    </div>

</div>

@endsection
