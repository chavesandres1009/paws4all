@extends('layouts.app')

@section('content')
@if(isset($refugio))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$refugio->nombre}}</div>
                <div class="panel-body">

                        <img style="heigth: 300px; width: 200px;" src="../storage/refugios/{{ $refugio->logo }}" class="img-responsive"  alt="">


                            <label for="direccion" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                              <p>{{ $refugio->direccion}}</p>
                            </div>

                            <label for="descripcion" class="col-md-4 control-label">Descripción</label>
                            <div class="col-md-6">
                              <p>{{ $refugio->descripcion }}</p>
                            </div>

                            <label for="telefono" class="col-md-4 control-label">Teléfono</label>

                            <div class="col-md-6">
                              <p>{{ $refugio->telefono }}</p>
                            </div>


                            <label for="email" class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6">
                              <p>{{ $refugio->email }}</p>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
