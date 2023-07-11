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

                <h2>index back office</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('products.create') }}"> nouveau produit</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>picture</th>

            <th>price</th>

            <th>discount</th>

            <th>description</th>

            <th>quantity</th>

            <th>sell</th>

            <th>category</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($products as $product)

        <tr>

            <td>{{ $product->id }}</td>

            <td>{{ $product->name }}</td>

            <td>{{ $product->picture_url_yoy }}</td>

            <td>{{ $product->price }}</td>

            <td>{{ $product->discount }}</td>

            <td>{{ $product->description }}</td>

            <td>{{ $product->quantity }}</td>

            <td>{{ $product->sell }}</td>

            <td>{{ $product->category }}</td>


            <td>

                <form action="{{ route('products.destroy',$product->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>



                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>






@endsection
