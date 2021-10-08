<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Muestra la vista del index
    public function index()
    {
        return view('admin.index');
    }
}
