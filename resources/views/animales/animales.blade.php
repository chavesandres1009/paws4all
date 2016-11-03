@extends('layouts.app')

@section('content')
@if(isset($mascotas))

<div class="container">
@foreach($mascotas as $mascota)
      <div class="col-sm-6 col-md-4" id="panel-animal">
      @if(Session::has('success' ))
            <div class="alert alert-success">
                {{Session::get("success")}}
            </div>
      @endif
      <div class="thumbnail">
         <img src="storage/mascotas/{{ $mascota->imagen }}" alt="">
         <div class="caption">
           <h2>Hola, mi nombre es {{ $mascota->nombre }}</h2>
           <h3>Refugio: <a href="{{$mascota->refugio_id}}/refugio">{{ $mascota->refugio->nombre }}</a> </h3>
           <p><span class="glyphicon glyphicon-time"></span>{{ $mascota->created_at }}</p>
           <p>Raza: {{ $mascota->raza }}</p>
           <p>Tipo: {{ $mascota->tipo }}</p>
           <p>Estado: {{ $mascota->estado }}</p>
           <p>
             <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Adoptar</button>
             <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Apadrinar</button>
           </p>
         </div>
       </div>
     </div>
        @endforeach
      </div>

<?php echo $mascotas->render(); ?>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Adoptar</h4>
      </div>
      <div class="modal-body">
        Al clickear el boton "Adoptar" se enviara un correo con su solicitud de adopcion.

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a href="{{ url('/adoptar')}}"><button type="button" class="btn btn-primary">Adoptar</button></a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apadrinar</h4>
            </div>
            <div class="modal-body col-md-12">

                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="jvillalobosvega-facilitator@hotmail.com">
                    <input type="hidden" name="item_name" value="Donacion">
                    <input type="hidden" name="currency_code" value="USD">
                    <div class="form-group">
                        <label for="titulo" class="col-md-5 control-label">Monto ($)</label>
                        <div class="col-md-5">
                            <input type="number" name="amount" value="" required autofocus>
                        </div>
                    </div>
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="return" value="{{ url('/exito')}}">
                    <input type="hidden" name="cancel_return" value="{{ url('/error')}}">



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="submit">Apadrinar</button>
            </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endif
@endsection
