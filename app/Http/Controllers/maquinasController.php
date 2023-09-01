<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sedes;
use App\Models\maquinas;
use DB;

class maquinasController extends Controller
{
    public function index() {
        $maquinas = DB::table('maquinas')
        ->join('sedes', 'maquinas.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('maquinas.NOMBREMAQUINA', 'maquinas.GRUPOMUSCULAR', 'maquinas.FECHACOMPRA', 'maquinas.IMGMAQUINA', 'maquinas.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->get(); 

        return view ('views-admin/maquinas', compact('maquinas'));
    }
}
