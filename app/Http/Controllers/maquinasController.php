<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\sedes;
use App\Models\maquinas;
use DB;

class maquinasController extends Controller
{
    public function index(Request $request) {
        $maquinaSede = $request->seleccionarSedeMaquinas;
        if($maquinaSede == "S1" || $maquinaSede == null) {

        $maquinas = DB::table('maquinas')
        ->join('sedes', 'maquinas.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('maquinas.NOMBREMAQUINA', 'maquinas.GRUPOMUSCULAR', 'maquinas.FECHACOMPRA', 'maquinas.IMGMAQUINA', 'maquinas.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->where('sedes.IDSEDE', '=', '1')
        ->get();     

         } else if ($maquinaSede == "S2") {

        $maquinas = DB::table('maquinas')
        ->join('sedes', 'maquinas.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('maquinas.NOMBREMAQUINA', 'maquinas.GRUPOMUSCULAR', 'maquinas.FECHACOMPRA', 'maquinas.IMGMAQUINA', 'maquinas.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->where('sedes.IDSEDE', '=', '2')
        ->get();  

        } else {

        $maquinas = DB::table('maquinas')
        ->join('sedes', 'maquinas.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('maquinas.NOMBREMAQUINA', 'maquinas.GRUPOMUSCULAR', 'maquinas.FECHACOMPRA', 'maquinas.IMGMAQUINA', 'maquinas.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->where('sedes.IDSEDE', '=', '3')
        ->get(); 
        }

        return view('views-admin/maquinas', compact('maquinas'));
    }
}
