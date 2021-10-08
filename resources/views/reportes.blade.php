@extends('layouts.app')

@section('title', 'Reportes')

@section('content')

<div class="container-fluid">
    <div class="row">

        @include('layouts.side-bar')

        @php
        $row = 1;
        $handle = fopen( "C:/xampp/htdocs/proyectos/prueba-tecnica/public/codigom.csv" ,"r");
        while ($data = fgetcsv ($handle, 1000, ",")) {
            $num = count ($data);
            print "<p> $num numero de campos en celda $row: <br> ";
            $row  ;
            for ($c=0; $c < $num; $c  ) {
                print $data[$c] . "<br> ";
            }
        }
        fclose ($handle);
        @endphp

    </div>
</div>

@endsection