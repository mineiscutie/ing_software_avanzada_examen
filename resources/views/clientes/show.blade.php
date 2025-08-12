@extends('layout')

@section('title', 'Ver Cliente')

@section('content')

<div class="card mx-auto" style="max-width: 500px;">

    {{-- Volver siempre arriba --}}
    <div class="p-2">
        <a href="{{ route('clientes.index') }}" class="text-muted" style="text-decoration: none;">
            ← Volver
        </a>
    </div>

    <div class="card-body pt-0">

        @if($cliente->foto)
            <img src="{{ asset('storage/'.$cliente->foto) }}" class="img-fluid mb-3" style="max-height: 300px; object-fit: cover;" alt="Foto del cliente">
        @endif

        <h5 class="card-title">{{ $cliente->nombres }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $cliente->email }}</p>
        <p class="card-text"><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
        <p class="card-text"><strong>Fono:</strong> {{ $cliente->fono }}</p>
        <p class="text-muted"><em>Publicado hace {{ $cliente->created_at->diffForHumans() }}</em></p>

        @auth
        <div class="d-flex justify-content-end gap-2 mt-3">
            <a href="{{ route('clientes.edit', $cliente) }}" class="btn btn-warning mr-2">Editar</a>
            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>
        @endauth

    </div>
</div>
@endsection
