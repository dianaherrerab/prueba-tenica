@extends('layouts.app')

@section('title', 'Usuarios')

@section('content')

<div class="container-fluid">
    <div class="row">

        @include('layouts.side-bar')
        <a href="{{ route('usuarios.create')}}">Crear usuario</a>
        <ul>
            @forelse ($usuarios as $usuario)
           <li> <a href="{{route('usuarios.show', $usuario)}}" >{{ $usuario->name }} </a></li>
            @empty
                <li>No hay usuarios para mostrar</li>
            @endforelse
        </ul>
       
    </div>
</div>
@endsection