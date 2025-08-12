@extends('layout')

@section('title', 'Home')

@section('content')

    <h1>
        @auth
            Hola, {{ Auth::user()->name }} 👋
        @else
            <h2>Usted se encuentra en la opción 'Home'</h2>
        @endauth
    </h1>

@endsection
