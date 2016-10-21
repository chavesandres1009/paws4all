@extends('layouts.sidebar')

@section('intro')
  @include('bienvenidos')
@endsection
@section('entrar')
  @include('auth.entar')
@endsection
@section('noticias')

@endsection
@section('mascotas')
  @include('animales.mascotas')
@endsection
@section('refugios')
  @include('refugios.refugios2')
@endsection
