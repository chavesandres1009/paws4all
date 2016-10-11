@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="GET" action="{{ url('/animal_add') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('tipo') ? ' has-error' : '' }}">
                            <label for="tipo" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tipo">
                                <select class="form-control" name="tipo">
                                  <option value="Perro">Perro</option>
                                  <option value="Gato">Gato</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('raza') ? ' has-error' : '' }}">
                            <label for="raza" class="col-md-4 control-label">Raza</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="raza">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
                            <label for="edad" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="edad">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tamano') ? ' has-error' : '' }}">
                            <label for="tamano" class="col-md-4 control-label">Tamaño</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="tamano">

                                @if ($errors->has('tamano'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tamano') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
                            <label for="imagen" class="col-md-4 control-label">Fotografía</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="imagen" required>

                                @if ($errors->has('imagen'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
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
