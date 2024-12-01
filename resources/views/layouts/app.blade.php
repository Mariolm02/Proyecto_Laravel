<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi App</title>
    <!-- Enlace a Bootstrap desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Aquí puedes incluir un menú o cabecera -->
        <nav>
            <!-- Menú de navegación -->
            <a href="{{ route('productos.index') }}">Productos</a>
            <a href="{{ route('productos.create') }}">Crear Producto</a>
        </nav>

        <!-- Aquí se insertará el contenido específico de cada vista -->
        @yield('content')
    </div>
</body>
</html>
