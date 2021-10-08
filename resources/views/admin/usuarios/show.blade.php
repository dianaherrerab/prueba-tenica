@extends('layouts.app')

@section('title', 'Usuario')

@section('content')

<div class="container-fluid">
    <div class="row">

        @include('layouts.side-bar')
        
        <h1>{{ $usuario->name}}</h1>
        <a href="{{ route('usuarios.edit', $usuario)}}">Actualizar</a>
        <form method="POST" action="{{ route('usuarios.destroy', $usuario)}}">
            @csrf @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>

       <p>{{$usuario->email}}</p>

    </div>
</div>

@endsection