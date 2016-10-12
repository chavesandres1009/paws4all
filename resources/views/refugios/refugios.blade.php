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
    </tr>
    @foreach ($refugios as $refugio)
      <tr>
        <td><img src="storage/{{ $refugio->logo }}" class="img-responsive"  alt=""></td>
        <td>{{ $refugio->nombre }}</td>
        <td>{{ $refugio->direccion }}</td>
        <td>{{ $refugio->descripcion }}</td>
        <td>{{ $refugio->telefono }}</td>
        <td>{{ $refugio->email}}</td>
      </tr>
    @endforeach
  </table>
@endif
@endsection
