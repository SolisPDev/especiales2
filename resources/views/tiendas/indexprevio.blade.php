@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Lista de Tiendas</h1>
        <div>
            <a href="/panel" class="btn btn-secondary">Regresar al Panel de Control</a>
            <a href="/tiendas/create" class="btn btn-primary">Nueva Tienda</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tiendas as $tienda)
                <tr>
                    <td>{{ $tienda->id }}</td>
                    <td>{{ $tienda->nombre }}</td>
                    <td>{{ $tienda->direccion }}</td>
                    <td>{{ $tienda->telefono }}</td>
                    <td>
                        <a href="/tiendas/{{ $tienda->id }}/edit" class="btn btn-warning btn-sm">Editar</a>
                        <form action="/tiendas/{{ $tienda->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar esta tienda?');">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No hay tiendas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {{ $tiendas->links() }}
    </div>
</div>
@endsection
