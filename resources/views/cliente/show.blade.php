@extends('layouts.app')

@section('title', 'Cliente')

@section('content')

<div class="container-fluid">
    <div class="row">

        @include('layouts.side-bar')
        
        <h1>{{ $cliente->nombre}}</h1>
        <a href="{{ route('clientes.edit', $cliente)}}">Actualizar</a>
        <form method="POST" action="{{ route('clientes.destroy', $cliente)}}">
            @csrf @method('DELETE')

            @can('crud_clientes')
                <button type="submit">Eliminar</button>
            @else
                <p>No puede actualizar un cliente</p>
            @endcan
            
        </form>

       <p>{{$cliente->documento}}</p> <br>
       <p>{{$cliente->correo}}</p> <br>
       <p>{{$cliente->direccion}}</p> <br>

    </div>
</div>

@endsection