<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\SaveClienteRequest;

class ClienteController extends Controller
{
    // Muestra la vista del index
    public function index()
    {   
        return view('cliente.index', [
            'clientes' => Cliente::get()
        ]);
    }

    // Muestra la vista del index
    public function show(Cliente $cliente)
    {   
        return view('cliente.show', [
            'cliente' => $cliente
        ]);
    }

    // Muestra la vista del index
    public function create()
    {   
        return view('cliente.create', [
            'cliente' => new Cliente
        ]);
    }

    // Muestra la vista del index
    public function store(SaveClienteRequest $request)
    {  
        Cliente::create($request->validated());

        return redirect()->route('clientes.index');
    }

    // Muestra la vista del index
    public function edit(Cliente $cliente)
    {  
        return view('cliente.edit', [
            'cliente' => $cliente
        ]);
    }

    // Muestra la vista del index
    public function update(Cliente $cliente, SaveClienteRequest $request)
    {  
        $cliente->update($request->validated());

        return redirect()->route('clientes.show', $cliente);
    }

    // Muestra la vista del index
    public function destroy(Cliente $cliente)
    {  
        $cliente->delete();

        return redirect()->route('clientes.index');
    }
}
