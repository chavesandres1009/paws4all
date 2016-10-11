@extends('layouts.app')

@section('content')
@if(isset($mascotas))
@foreach($mascotas as $mascota)
<div class="container">

    <div class="row">

        <div class="col-lg-8">

            <h2>Nombre</h2>
            <p class="lead">
                by <a href="#">Refugio</a>
            </p>
            <hr>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

            <hr>
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr>
            <p>Raza: {{ $mascota->raza }}</p>
            <p>Tipo: {{ $mascota->tipo }}</p>
            <p>Raza: {{ $mascota->estado }}</p>
            <hr>
          </div>
        </div>
      </div>
@endforeach
@endif
@endsection
