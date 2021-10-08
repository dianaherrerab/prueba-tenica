
@extends('layouts.app')

@section('title', 'Actualizar usuario')

@section('content')

<div class="container-fluid">
    <div class="row">
        
        @include('layouts.side-bar')
        <h1>Actualizar un usuario</h1>

        @include('layouts.validation-errors')

        <form action="{{ route('usuarios.update', $usuario)}}" method="POST">
            @csrf @method('PATCH')

            @include('admin.usuarios.form')
            
            <button type="submit">Actualizar</button>
        </form>
    </div>
</div>

@endsection