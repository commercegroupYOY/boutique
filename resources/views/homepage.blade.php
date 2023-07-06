@extends('layout.layout')

@section('content')
<div class="mx-auto">
    <img src="{{asset ('img/entete.png')}}" class="mx-auto" alt="en-tête">
</div>
<div class="py-8"></div>
<h1 class="text-2xl text-center ps-10" > RétroRogolo </h1>
</div>
@include('layout._home._carouselconsole')
@include('layout._home._catalog_choice')
@endsection

@section('title')
RétroRigoloch @endsection

@section('Homecontent')
<div class="py-8"></div>
<h1 class="text-2xl text-center ps-10" > RétroRogolo </h1>
</div>

 @endsection

@include('layout.catalog_choice')

