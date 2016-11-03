@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Paws4All</div>

                <div class="panel-body">
                    <div class="jumbotron">
                        <h1>¡Bienvenido!</h1>
                        <p>Esta es una aplicación web que facilita la adopción de mascotas</p>
                        <p>Puedes encontrar información y fotos de animales en refugios que estan buscando un hogar alrededor del país.</p>
                        <p class="lead">¡Sólo tienes que registrarte!</p>
                        <p><a class="btn btn-primary btn-lg" href="{{ url('/register') }}" role="button">Entrar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
