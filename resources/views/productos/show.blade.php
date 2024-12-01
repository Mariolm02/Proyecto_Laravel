<!-- resources/views/productos/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalles del Producto</h1>
    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
    <p><strong>Precio:</strong> ${{ $producto->precio }}</p>
    <p><strong>Stock:</strong> {{ $producto->stock }}</p>

    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
@endsection
