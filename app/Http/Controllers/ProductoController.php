<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProducto;

class ProductoController extends Controller
{
    public function index(){
        /*Aquí el modelo Producto hace la consulta a la base de datos para todos los registros de la tabla 'productos'
        mediante el método paginate y los ardena del más reciente al más antiguo y se almacena en la variable $productos*/
        $productos = Producto::orderBy('id', 'desc')->paginate();
        //Aquí se llama a la vista principal de todos los productos y se le pasa como parámetro la variable $productos
        return view('productos.index', compact('productos'));
    }
    public function create(){
        //se llama a la vista del formulario donde se agrega un producto nuevo
        return view('productos.create');
    }
    public function store(StoreProducto $request){
        //aquí se hacen las validaciones del formulario y si se cumplen se crea el producto en la base de datos
        $producto = Producto::create($request->all());
        //después de agregar el producto nuevo se redirecciona a la página principal de todos los productos
        return redirect()->route('productos.index', $producto);
    }
    public function show(Producto $producto){
        /*aquí se trae el registro de un producto mediante el id y se llama a la vista show 
        enviándole el producto como parámetro*/
        return view('productos.show', compact('producto'));
    }
    public function edit(Producto $producto){
        return view('productos.edit', compact('producto'));
    }
    public function update(StoreProducto $request, Producto $producto){
        $producto->update($request->all());
        return redirect()->route('productos.show', $producto);
    }
    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('productos.index');
    }
}