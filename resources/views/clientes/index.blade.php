@extends('layout')

@section('title', 'Clientes')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1 class="mb-4">Lista de Clientes</h1>

    <a href="{{ route('clientes.create') }}" class="btn btn-outline-primary mb-3">+ Nuevo Cliente</a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
                <tr>
                    <td>
                        @if($cliente->foto)
                            <img src="{{ asset('storage/' . $cliente->foto) }}" alt="Foto" width="50" height="50" class="rounded">
                        @else
                            <span class="text-muted">Sin foto</span>
                        @endif
                    </td>
                    <td>{{ $cliente->nombres }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->fono }}</td>
                    <td>
                        <a href="{{ route('clientes.show', $cliente) }}" class="btn btn-info btn-sm me-2">Ver</a>

                        @auth
                            <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning btn-sm me-2">Editar</a>

                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        @endauth
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No hay clientes registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
