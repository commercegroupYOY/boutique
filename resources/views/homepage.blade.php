@extends('layout.layout')

@section('content')
<div class="mx-auto">
    <img src="{{asset ('img/entete.png')}}" class="mx-auto" alt="en-tête">
</div>
<div class="py-8"></div>
</div>
@include('layout._home._txthome')
@include('layout._home._carouselconsole')
@include('layout._home._catalog_choice')
@endsection

@section('title')
RétroRigolo @endsection




