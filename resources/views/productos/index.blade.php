@extends('layouts.plantilla')
@section('title', 'Productos')  
@section('content')
    <h1>Bienvenido a la página principal de Productos</h1> 
    <a href="{{route('productos.create')}}"><button>Agregar nuevo producto</button></a>
    <h2>Productos registrados:</h2> 
    <table>
        <tr>
            <td><strong>Nombre</strong></td>
            <td><strong>Sku</strong>
            <td><strong>Cantidad</strong>
            <td><strong>Precio</strong>
            <td><strong>Estado</strong>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @foreach ($productos as $producto)
            <tr>
                <td> {{$producto->nombre_producto}}&nbsp;&nbsp;</td>
                <td> {{$producto->sku}}&nbsp;&nbsp;</td>
                <td> {{$producto->cantidad}}&nbsp;&nbsp;</td>
                <td> {{$producto->precio}}&nbsp;&nbsp;</td>
                <td> {{$producto->estado}}&nbsp;&nbsp;</td>
                <td><a href="{{route('productos.show', $producto->id)}}" target="_blank"><button>Detalles</button></a>&nbsp;</td>
                <td><a href="{{route('productos.edit', $producto->id)}}" target="_blank"><button>Editar</button></a>&nbsp;</td>    
                <td>
                    <form action="{{route('productos.destroy', $producto)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form> 
                </td>    
            </tr>            
        @endforeach
    </table>
    {{$productos->links()}}
@endsection