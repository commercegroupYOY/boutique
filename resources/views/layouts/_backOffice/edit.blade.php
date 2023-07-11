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

            <h2>Edit Product</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('products.index') }}"> retour</a>

        </div>

    </div>

</div>



@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> il y a une erreur dans la saisie.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



<form action="{{ route('products.update',$product->id) }}" method="POST">

    @csrf

    @method('PUT')



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>picture:</strong>

                <textarea class="form-control" style="height:150px" name="picture_url_yoy" placeholder="picture">{{ $product->picture_url_yoy }}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>price:</strong>

                <textarea class="form-control" style="height:150px" name="price" placeholder="price">{{ $product->price }}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Discount:</strong>

                <textarea class="form-control" style="height:150px" name="Discount" placeholder="Discount">{{ $product->Discount }}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>weight:</strong>

                <textarea class="form-control" style="height:150px" name="weight" placeholder="weight">{{ $product->weight }}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>description:</strong>

                <textarea class="form-control" style="height:150px" name="description" placeholder="description">{{ $product->description }}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>quantity:</strong>

                <textarea class="form-control" style="height:150px" name="quantity" placeholder="quantity">{{ $product->quantity }}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>sell:</strong>

                <textarea class="form-control" style="height:150px" name="sell" placeholder="sell">{{ $product->sell }}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>category:</strong>

                <textarea class="form-control" style="height:150px" name="category" placeholder="category">{{ $product->category }}</textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

          <button type="submit" class="btn btn-primary">envoyer</button>

        </div>

    </div>



</form>

@endsection
