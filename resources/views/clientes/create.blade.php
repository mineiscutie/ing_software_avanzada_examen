@extends('layout')
@section('title', 'Crear Cliente')
@section('content')
    <h1>Crear Cliente</h1>
    @include('partials.validation-errors')

    <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
        @include('partials.form', ['cliente' => new App\Models\Cliente, 'btnText' => 'Guardar'])
    </form>
@endsection
