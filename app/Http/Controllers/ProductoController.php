<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    // Mostrar el formulario para crear un producto
    public function create()
    {
        return view('productos.create');
    }

    // Almacenar un nuevo producto
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto creado con éxito');
    }

    // Mostrar un producto específico
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    // Mostrar el formulario para editar un producto
    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    // Actualizar un producto
    public function update(Request $request, Producto $producto)
    {
        // Validación
        $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'nullable',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado con éxito');
    }

    // Eliminar un producto
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito');
    }
}
