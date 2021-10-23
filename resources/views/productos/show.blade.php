@extends('layouts.plantilla')
@section('title', 'Producto '. $producto->nombre_producto)  
@section('content')
    <h1>Producto: {{$producto->nombre_producto}}</h1> 
    <p><strong>Sku: </strong>{{$producto->sku}}</p>
    <p><strong>Cantidad: </strong>{{$producto->cantidad}}</p>
    <p><strong>Precio: </strong>{{$producto->precio}}</p>
    <p><strong>Estado: </strong>{{$producto->estado}}</p>
    <a href="{{route('productos.edit', $producto)}}"><button>Editar producto</button></a>
    <br><br>
    <form action="{{route('productos.destroy', $producto)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar producto</button>
    </form>   
    <br>
    <a href="{{route('productos.index')}}"><button>Volver a productos</button></a>
@endsection