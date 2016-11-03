@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar una noticia</div>
                    <div class="panel-body">

                        @if  (Auth::check())
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data" action="{{ url('/add_news_admin')}}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="titulo" class="col-md-4 control-label">Titulo</label>
                                    <div class="col-md-6">
                                        <input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="descripcion" class="col-md-4 control-label">Descripción</label>

                                    <div class="col-md-6">
                                        <textarea id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" required autofocus></textarea>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="urlImg" class="col-md-4 control-label">Imagen</label>

                                    <div class="col-md-6">
                                        <input id="urlImg" type="file" class="form-control" name="urlImg">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Agregar Noticia
                                        </button>
                                    </div>
                                </div>
                            </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
