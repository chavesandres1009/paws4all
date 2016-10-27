@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Noticias</div>
                    <div class="panel-body">
                        @if (count($noticias) > 0)
                            @foreach ($noticias as $noticia)
                                <div class="noticia">
                                    <label>{{ $noticia->titulo }}</label>
                                    <label>{{ $noticia->created_at }}</label>
                                    <p>{{ $noticia->descripcion }}</p>
                                    <?php $user = $usuarios->find($noticia->user_id); ?>
                                    <span>{{ $user->name . ' ' . $user->apellidos }}</span>
                                </div>
                            @endforeach


                        @else
                           No hay noticias.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
