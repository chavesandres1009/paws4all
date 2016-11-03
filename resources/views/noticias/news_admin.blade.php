@extends('layouts.app')

@section('content')
@if(isset($noticias))
<div class="container">

  <div class="container" id="btn-publicacion">
      <a href="/add_noticia_admin_form" class="btn btn-primary btn-lg pull-right" @if(Auth::guest()) style="visibility: hidden;" @endif>Hacer una publicación</a>
    </div>

    <div class="panel-group">
    @foreach($noticias as $noticia)
        <div class="panel panel-info col-md-8 col-md-offset-2" style="padding: 0px; margin-top: 2em;" id="new-panel">
            <div class="panel-heading"><h2>{{ $noticia->titulo }}</h2></div>
            <div class="panel-body">
                <p><span class="glyphicon glyphicon-time"></span>{{ $noticia->created_at }}</p>
                @if($noticia->imagen != null)
                <center><img src="storage/mascotas/{{ $noticia->imagen }}" class="img-responsive" style="with: 600px; height: 400px;"></center>
                @endif
                <p class="lead">Publicado por: {{ $noticia->refugio->nombre }}</p>
            <div class="panel-footer"><p>{{ $noticia->descripcion }}</p></div>
        </div>
    </div>
    @endforeach
    </div>


    <div class="container" id="returnTop">
        <div class="row">
            <div class="col-md-12" style="text-align: right; margin-bottom: -1.5em">
                <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Arriba" data-toggle="tooltip" data-placement="left"><span class="glyphicon-chevron-up"> TOP</span></a>    
            </div>
        </div>
    </div>

</div>

@endif
@endsection
