@extends('layouts.app')

@section('content')
@if(isset($noticias))
@foreach($noticias as $noticia)
<div class="container">

    <div class="row">

        <div class="col-lg-8">

            <h2>{{ $noticia->titulo }}</h2>
            <p class="lead">
                 Publicado por: {{ $noticia->refugio->nombre }}
            </p>
            <hr>
            <p><span class="glyphicon glyphicon-time"></span> Publicado el {{ $noticia->created_at }}</p>

            <hr>
            @if($noticia->imagen != null)
            <img src="storage/mascotas/{{ $noticia->imagen }}" class="img-responsive" style="with: 600px; height: 400px;" alt="">
            @endif
            <hr>
            <p>{{ $noticia->descripcion }}</p>
            <hr>
          </div>
        </div>
      </div>
@endforeach
@endif
@endsection
