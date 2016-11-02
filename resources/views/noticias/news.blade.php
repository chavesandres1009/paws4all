@extends('layouts.app')

@section('content')
@if(isset($noticias))
  <div class="container">

@foreach($noticias as $noticia)

    <div class="row">

        <div class="col-lg-8">

            <h2>{{ $noticia->titulo }}</h2>
            <p class="lead">
                 Publicado por: {{ $noticia->user->name . ' ' . $noticia->user->apellidos }}
            </p>
            <hr>
            <p><span class="glyphicon glyphicon-time"></span> Publicado el {{ $noticia->created_at }}</p>

            <hr>
            @if($noticia->imagen != null)
            <img src="imgNoticias/{{ $noticia->imagen }}" class="img-responsive" style="with: 600px; height: 400px;" alt="">
            @endif
            <hr>
            <p>{{ $noticia->descripcion }}</p>
            <hr>
          </div>
        </div>
@endforeach

  <a href="/noticias" class="btn btn-primary" @if(Auth::guest()) disabled @endif>Hacer una publicación</a>
</div>

@endif
@endsection
