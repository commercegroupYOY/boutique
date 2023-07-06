@extends('layout.layout')

@section('content')
<div class="mx-auto">
    <img src="{{asset ('img/entete.png')}}" class="mx-auto" alt="en-tête">
</div>
@endsection

@section('title')
RétroRigolo @endsection


@include('layout.catalog_choice')

