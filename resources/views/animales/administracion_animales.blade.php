@extends('layouts.app')

@section('content')
@if(isset($refugio))
<div class="container">
  <table class="table table-condensed">
    <tr>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>Estado</th>
      <th>Edad</th>
      <th>Raza</th>
      <th>Tamaño</th>
      <th>Opciones</th>
    </tr>
    @foreach ($refugio->mascotas as $mascota)
      <tr>
        <td><img style="heigth: 100px; width: 100px;" src="storage/mascotas/{{ $mascota->imagen }}" class="img-responsive"  alt=""></td>
        <td>{{ $mascota->nombre }}</td>
        <td>{{ $mascota->estado }}</td>
        <td>{{ $mascota->edad }}</td>
        <td>{{ $mascota->raza }}</td>

        <td>{{ $mascota->tamano }}</td>
          <td>
            <a href="{{ $mascota->id }}/modificar_animal" class="btn btn-link">Modificar</a>
            <a href="{{ $mascota->id }}/eliminar_animal" class="btn btn-link"> Eliminar </a>
         </td>
      </tr>
    @endforeach
  </table>
@endif
@endsection
