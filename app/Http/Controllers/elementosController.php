<?php

namespace App\Http\Controllers;

use App\Models\sedes;
use App\Models\elementos;
use Illuminate\Http\Request;
use DB;

class elementosController extends Controller
{
    public function index() {
        $elementos = DB::table('elementos')
        ->join('sedes', 'elementos.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('elementos.NOMBRE as nombreElemento', 'elementos.TIPO', 'elementos.USO', 'elementos.FECHACOMPRA', 'elementos.IMGELEMENTO', 'elementos.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->get();
        
        return view('views-admin/elementos', compact('elementos'));
    }     
}
