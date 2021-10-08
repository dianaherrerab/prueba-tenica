<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReporteController extends Controller
{
    function index(){

        // $ruta = public_path('codigom.csv');

        // define('CSV', $ruta);

        // $readCsv = array_map('str_getcsv', file(CSV));

        // return view('reportes', ['readCSV' => $readCsv]);
        return view('reportes');
    }
}
