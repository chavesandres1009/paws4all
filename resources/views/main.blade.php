@extends('layouts.sidebar')

@section('intro')
  @include('bienvenidos')
@endsection

@if(Auth::guest())
@section('entrar')
  @include('auth.entar')
@endsection
@endif

@section('noticias')

@endsection
@section('mascotas')
  @include('animales.mascotas')
@endsection
@section('refugios')
  @include('refugios.refugios2')
@endsection
