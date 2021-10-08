<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendedorController extends Controller
{
    // Muestra la vista del index
    public function index()
    {
        return view('vendedor.index');
    }
}
