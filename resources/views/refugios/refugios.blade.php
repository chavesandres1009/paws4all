@extends('layouts.app')

@section('content')
@if(isset($refugios))
<div class="container">
  <table class="table table-condensed">
    <tr>
      <th>Logo</th>
      <th>Nombre</th>
      <th>Dirección</th>
      <th>Descripción</th>
      <th>Teléfono</th>
      <th>Correo</th>
      <th>Opciones</th>
    </tr>
    @foreach ($refugios as $refugio)
      <tr>
        <td><img style="heigth: 100px; width: 100px;" src="storage/refugios/{{ $refugio->logo }}" class="img-responsive"  alt=""></td>
        <td>{{ $refugio->nombre }}</td>
        <td>{{ $refugio->direccion }}</td>
        <td>{{ $refugio->descripcion }}</td>
        <td>{{ $refugio->telefono }}</td>
        <td>{{ $refugio->email}}</td>
          <td>
            <a href="{{ $refugio->id }}/modificar_refugio" class="btn btn-link"> Modificar </a>
            <a href="{{ $refugio->id }}/eliminar_refugio" class="btn btn-link"> Eliminar </a>
         </td>
      </tr>
    @endforeach
  </table>
@endif
@endsection
