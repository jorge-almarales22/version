@extends('layout')
@section('title','Inicio')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">
                    Desarrollo Web
                </h1>
                <p class="lead text-secondary">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                @can('create products')
                <a class="btn btn-lg btn-block btn-primary" 
                    href="{{ route('users.index') }}">
                    Usuarios
                </a>
                @endcan
                @can('navegar products')
                <a class="btn btn-lg btn-block btn-outline-primary" 
                    href="{{ route('products.index') }}">
                    Productos
                </a>
                @endcan
            </div>
            <div class="col-12 col-lg-6 py-4">
                <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
            </div>
        </div>
    </div>
    {{-- @auth
    <p>Bienvenido usuario: {{ auth()->user()->name }}</p>
    @endauth --}}
@endsection
