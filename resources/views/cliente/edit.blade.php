
@extends('layouts.app')

@section('title', 'Actualizar usuario')

@section('content')

<div class="container-fluid">
    <div class="row">
        
        @include('layouts.side-bar')
        <h1>Actualizar un cliente</h1>

        @include('layouts.validation-errors')

        <form action="{{ route('clientes.update', $cliente)}}" method="POST">
            @csrf @method('PATCH')

            @include('cliente.form')

            @can('crud_clientes')
                <button type="submit">Actualizar</button>
            @else
                <p>No puede actualizar un cliente</p>
            @endcan
            
        </form>
    </div>
</div>

@endsection