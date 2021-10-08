@extends('layouts.app')

@section('title', 'Crear usuario')

@section('content')

<div class="container-fluid">
    <div class="row">
        
        @include('layouts.side-bar')

        <h1>Crear un nuevo usuario</h1>

        @include('layouts.validation-errors')

        <form action="{{ route('usuarios.store')}}" method="POST">
            @csrf
            
            @include('admin.usuarios.form')

            <button type="submit">Guardar</button>
        </form>
    </div>
</div>

@endsection