@extends('layouts.app')

@section('content')
<div class="container" style="padding:0px">
    <div class="row">
        <div class="col-md-4" style="margin-top: 6em;">
                <img src="images/logo.png" style="height: 60%; width: 100%">
        </div>

        <div class="col-md-7 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="jumbotron" id="jumbotron">
                        <h1>¡Bienvenido!</h1>
                        <p>Esta es una aplicación web que facilita la adopción de mascotas.</p>
                        <p>Puedes encontrar información y fotos de animales en refugios que estan buscando un hogar alrededor del país.</p>
                        <p class="lead">¡Sólo tienes que registrarte!</p>
                        <p><a class="btn btn-success" href="{{ url('/register') }}" role="button">Entrar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
