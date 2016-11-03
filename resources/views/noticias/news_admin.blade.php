@extends('layouts.app')

@section('content')
@if(isset($noticias))
<div class="container">

    <div class="panel-group">
    @foreach($noticias as $noticia)
        <div class="panel panel-info col-md-8" style="padding: 0px">
            <div class="panel-heading"><h2>{{ $noticia->titulo }}</h2></div>
            <div class="panel-body">
                <p class="lead">Publicado por: {{ $noticia->refugio->nombre }}</p>
                <p><span class="glyphicon glyphicon-time"></span>{{ $noticia->created_at }}</p>
                @if($noticia->imagen != null)
                <img src="storage/mascotas/{{ $noticia->imagen }}" class="img-responsive" style="with: 600px; height: 400px;" alt="">
                @endif
            <div class="panel-footer"><p>{{ $noticia->descripcion }}</p></div>
        </div>
    </div>
    @endforeach
<a href="/add_noticia_admin_form" class="btn btn-primary" @if(Auth::guest()) style="visibility: hidden;" @endif>Hacer una publicación</a>
@endif
@endsection
