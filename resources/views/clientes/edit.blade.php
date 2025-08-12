@extends('layout')

@section('title', 'Editar Cliente')

@section('content')

    <h1>Editar Cliente</h1>
    @include('partials.validation-errors')

    <form action="{{ route('clientes.update', $cliente) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @include('partials.form', ['btnText' => 'Actualizar'])
    </form>
@endsection
