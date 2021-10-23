@extends('layouts.plantilla')
@section('title', 'Productos edit')  
@section('content')
    <h1>Editar producto</h1> 
    <form action="{{route('productos.update', $producto)}}" method="POST">
        @csrf
        @method('put')
        <label>
            <strong>Sku:</strong>
            <br>
            <input type="text" name="sku" value="{{old('sku', $producto->sku)}}">
            &nbsp;sólo números y guiones
        </label>
        @error('sku')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            <strong>Nombre:</strong>
            <br>
            <input type="text" name="nombre_producto" value="{{old('nombre_producto', $producto->nombre_producto)}}">
            &nbsp;Máximo 60 caracteres
        </label>
        @error('nombre_producto')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            <strong>Cantidad:</strong>
            <br>
            <input type="text" name="cantidad" value="{{old('cantidad', $producto->cantidad)}}">
            &nbsp;Sólo números (mínimo 1)
        </label>
        @error('cantidad')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <label>
            <strong>Precio:</strong>
            <br>
            <input type="text" name="precio" value="{{old('precio', $producto->precio)}}">
            &nbsp;Sólo números
        </label>
        @error('precio')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <label>
            <?php $check=old('estado', $producto->estado);?>
            <br>
            <strong>Activo</strong>
            <input type="radio" name="estado" value="Activo" {{($check=="Activo")?"checked":""}}>
            <br>
            <strong>Inactivo</strong>
            <input type="radio" name="estado" value="Inactivo" {{($check=="Inactivo")?"checked":""}}>
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="{{route('productos.index')}}"><button>Cancelar y regresar</button></a>
@endsection