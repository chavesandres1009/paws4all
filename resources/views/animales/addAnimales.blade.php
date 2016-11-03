@extends('layouts.app')

@section('content')
<div class="container" id="login">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" @if (isset($mascota))  action="{{ url('/'. $mascota->id .'/guardar_animal') }}" @else action="{{ url('/guardar_animal') }}" @endif enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="tipo" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                <select class="form-control" name="tipo">
                                  <option value="Perro" @if(isset($mascota) && $mascota->tipo == "Perro") selected @endif>Perro</option>
                                  <option value="Gato" @if(isset($mascota) && $mascota->tipo == "Gato") selected @endif >Gato</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nombre" @if(isset($mascota)) value="{{ $mascota->nombre }}" @endif />

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('raza') ? ' has-error' : '' }}">
                            <label for="raza" class="col-md-4 control-label">Raza</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="raza" @if(isset($mascota)) value="{{ $mascota->raza }}" @endif />

                                @if ($errors->has('raza'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('raza') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                            <label for="edad" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="edad" @if(isset($mascota)) value="{{ $mascota->edad }}" @endif>

                                @if ($errors->has('edad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tamano') ? ' has-error' : '' }}">
                            <label for="tamano" class="col-md-4 control-label">Tamaño</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tamano" @if(isset($mascota)) value="{{ $mascota->tamano }}" @endif>

                                @if ($errors->has('tamano'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tamano') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if (isset($mascota))
                        <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                            <label for="estado" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <select class="form-control" name="estado">
                                  <option value="Sin apadrinar" @if($mascota->estado == "Sin apadrinar") selected @endif>Sin Apadrinar</option>
                                  <option value="Apadrinado" @if($mascota->estado == "Apadrinado") selected @endif>Apadrinado</option>
                                </select>
                            </div>
                        </div>
                        @endif


                        <div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
                            <label for="imagen" class="col-md-4 control-label">Fotografía</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="img">

                                @if ($errors->has('imagen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input name="refugio_id" style="visibility: hidden" value="{{ Auth::user()->refugio_id }}" />

                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-7">
                                <button type="submit" class="btn btn-primary">
                                  @if (isset($mascota))
                                    Modificar
                                  @else
                                    Guardar
                                  @endif
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
