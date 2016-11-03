@extends('layouts.app')

@section('content')
@if(isset($noticias))
  <div class="container">

    <div class="container">
      <a href="/noticias" class="btn btn-primary btn-lg pull-right" @if(Auth::guest()) style="visibility: hidden;" @endif>Hacer una publicación</a>
    </div>

    <div class="panel-group">
    @foreach($noticias as $noticia)
      <div class="panel panel-info col-md-8" style="padding: 0px">
        <div class="panel-heading"><h2>{{ $noticia->titulo }}</h2></div>
        <div class="panel-body">
          <p class="lead">Publicado por: {{ $noticia->user->name . ' ' . $noticia->user->apellidos }}</p>
          <p><span class="glyphicon glyphicon-time"></span>{{ $noticia->created_at }}</p>
          @if($noticia->imagen != null)
            <img src="imgNoticias/{{ $noticia->imagen }}" class="img-responsive" style="with: 600px; height: 400px;" alt="">
          @endif
        </div>
        <div class="panel-footer"><p>{{ $noticia->descripcion }}</p></div>
      </div>
    @endforeach
    </div>
  </div>
@endif
@endsection
