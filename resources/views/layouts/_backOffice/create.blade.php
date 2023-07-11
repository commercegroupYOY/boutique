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

            <h2>Nouveau Produit</h2>

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



<form action="{{ route('products.store') }}" method="POST">

    @csrf



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                <input type="text" name="name" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>picture:</strong>

                <textarea class="form-control" style="height:150px" name="picture_url_yoy" placeholder="picture"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>price:</strong>

                <textarea class="form-control" style="height:150px" name="price" placeholder="price"></textarea>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>discount:</strong>

                <textarea class="form-control" style="height:150px" name="discount" placeholder="discount"></textarea>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>weight:</strong>

                <textarea class="form-control" style="height:150px" name="weight" placeholder="weight"></textarea>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>description:</strong>

                <textarea class="form-control" style="height:150px" name="description" placeholder="description"></textarea>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>quantity:</strong>

                <textarea class="form-control" style="height:150px" name="quantity" placeholder="quantity"></textarea>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>sell:</strong>

                <textarea class="form-control" style="height:150px" name="sell" placeholder="sell"></textarea>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>category:</strong>

                <textarea class="form-control" style="height:150px" name="category" placeholder="category"></textarea>

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">envoyer</button>

        </div>

    </div>



</form>

@endsection
