@extends('layouts.app')

@section('content')
@if(isset($mascotas))
@foreach($mascotas as $mascota)
<div class="container">

    <div class="row">

        <div class="col-lg-8">

            <h2>Hola, mi nombre es {{ $mascota->nombre }}</h2>
            <p class="lead">
                by <a href="#">Refugio</a>
            </p>
            <hr>
            <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p>

            <hr>
            <img src="storage/mascotas/{{ $mascota->imagen }}" class="img-responsive"  alt="">
            <hr>
            <p>Raza: {{ $mascota->raza }}</p>
            <p>Tipo: {{ $mascota->tipo }}</p>
            <p>Estado: {{ $mascota->estado }}</p>
            <p>
              <a href="{{ $mascota->id }}/modificar_animal" class="btn-link">Modificar</a>
              <a href="{{ $mascota->id }}/eliminar_animal" class="btn-link">Eliminar</a>
            </p>
            <hr>
          </div>
        </div>
      </div>
@endforeach
@endif
@endsection
