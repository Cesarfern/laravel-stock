@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
    <meta http-equiv="refresh" content="5; URL={{route('productos.index')}}" />
    <h1>Bienvenido a la página principal</h1>
    <a href="{{route('productos.index')}}"><button>Ir a Productos</button></a>
@endsection