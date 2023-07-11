@extends('layouts.layout')

@section('content')
    <div class="mx-auto">
        <img src="{{ asset('img/entete.png') }}" class="mx-auto" alt="en-tête">
    </div>
@section('title')
    Profil
@endsection
@include('includs._home._txtHome')
@include('includs._home._carousel')
@include('includs._home._catalogChoice')
@endsection
