@extends('layouts.app')

@section('content')
@if(isset($mascotas))
@foreach($mascotas as $mascota)
<div class="container">

    <div class="row">

        <div class="col-lg-8">

            <h2>Hola, mi nombre es {{ $mascota->nombre }}</h2>
            <p class="lead">
                 Refugio: {{ $mascota->refugio->nombre }}
            </p>
            <hr>
            <p><span class="glyphicon glyphicon-time"></span> Posteado el {{ $mascota->created_at }}</p>

            <hr>
            <img src="storage/mascotas/{{ $mascota->imagen }}" class="img-responsive"  alt="">
            <hr>
            <p>Raza: {{ $mascota->raza }}</p>
            <p>Tipo: {{ $mascota->tipo }}</p>
            <p>Estado: {{ $mascota->estado }}</p>
            <p>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Adoptar</button>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Apadrinar</button>
            </p>
            <hr>
          </div>
        </div>
      </div>
@endforeach
<?php echo $mascotas->render(); ?>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Apadrinar</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endif
@endsection
