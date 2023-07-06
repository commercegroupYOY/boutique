@extends('layout.layout')

@section('content')
<div class="mx-auto">
    <img src="{{asset ('img/entete.png')}}" class="mx-auto" alt="en-tête">
</div>


@section('title')
RétroRigolo @endsection

@include('layout._home._txthome')
@include('layout._home._carouselconsole')
@include('layout._home._catalog_choice')
@endsection
