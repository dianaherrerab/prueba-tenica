@extends('layouts.app')

@section('title', 'Crear cliente')

@section('content')

<div class="container-fluid">
    <div class="row">
        
        @include('layouts.side-bar')

        <h1>Crear un nuevo cliente</h1>

        @include('layouts.validation-errors')

        <form action="{{ route('clientes.store')}}" method="POST">
            @csrf
            
            @include('cliente.form')
            
            @can('crud_clientes')
                <button type="submit">Guardar</button>
            @else
                <p>No puede actualizar un cliente</p>
            @endcan
        </form>
    </div>
</div>

@endsection