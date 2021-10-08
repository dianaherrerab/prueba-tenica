@extends('layouts.app')

@section('title', 'Clientes')

@section('content')

<div class="container-fluid">
    <div class="row">

        @include('layouts.side-bar')
        @can('crud_clientes')
            <a href="{{ route('clientes.create')}}">Crear cliente</a>
        @else
            <p>No puede crear un cliente</p>
        @endcan
        <ul>
            @forelse ($clientes as $cliente)
           <li> <a href="{{route('clientes.show', $cliente)}}" >{{ $cliente->nombre }} </a></li>
            @empty
                <li>No hay clientes para mostrar</li>
            @endforelse
        </ul>
       
    </div>
</div>
@endsection