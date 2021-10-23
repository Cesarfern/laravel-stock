@extends('layouts.plantilla')
@section('title', 'Productos agregar')  
@section('content')
    <h1>Agregar nuevo producto</h1> 
    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <label>
            <strong>Sku:</strong>
            <br>
            <input type="text" name="sku" value="{{old('sku')}}">
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
            <input type="text" name="nombre_producto" value="{{old('nombre_producto')}}">
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
            <input type="text" name="cantidad" value="{{old('cantidad')}}">
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
            <input type="text" name="precio" value="{{old('precio')}}">
            &nbsp;Sólo números
        </label>
        @error('precio')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <label>
            <br>
            <strong>Activo</strong>
            <input type="radio" name="estado" value="Activo" {{(old('estado')=="Inactivo")?"":"checked"}}>
            <br>
            <strong>Inactivo</strong>
            <input type="radio" name="estado" value="Inactivo" {{(old('estado')=="Inactivo")?"checked":""}}>
        </label>
        <br><br>
        <button type="submit">Agregar producto</button>
    </form>
    <br>
    <a href="{{route('productos.index')}}"><button>Regresar</button></a>
@endsection