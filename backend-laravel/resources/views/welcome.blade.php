<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Coches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Listado de Coches</h1>

        <!-- Verificar si el usuario está autenticado -->
        @if (Auth::check())
            <p>Bienvenido, {{ Auth::user()->name }}!</p>
            <!-- Aquí va el listado de coches -->
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cars as $car)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $car->brand }}</td>
                            <td>{{ $car->model }}</td>
                            <td>{{ $car->year }}</td>
                            <td>{{ $car->color }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No hay coches registrados</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        @else
            <!-- Si el usuario no está autenticado, mostramos los enlaces para login y registro -->
            <div class="text-center">
                <a href="{{ route('login') }}" class="btn btn-primary">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="btn btn-success">Registrar</a>
            </div>
        @endif
    </div>
</body>
</html>
