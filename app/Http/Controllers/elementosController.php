<?php

namespace App\Http\Controllers;

use App\Models\sedes;
use App\Models\elementos;
use Illuminate\Http\Request;
use DB;

class elementosController extends Controller
{
    public function index(Request $request) {
        $elementoSede = $request->seleccionarSedeElementos;
        if($elementoSede == "S1" || $elementoSede == null) {
        $elementos = DB::table('elementos')
        ->join('sedes', 'elementos.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('elementos.NOMBRE as nombreElemento', 'elementos.TIPO', 'elementos.USO', 'elementos.FECHACOMPRA', 'elementos.IMGELEMENTO', 'elementos.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->where('sedes.IDSEDE', '=', '1')
        ->get();

         } else if ($elementoSede == "S2") {

        $elementos = DB::table('elementos')
        ->join('sedes', 'elementos.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('elementos.NOMBRE as nombreElemento', 'elementos.TIPO', 'elementos.USO', 'elementos.FECHACOMPRA', 'elementos.IMGELEMENTO', 'elementos.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->where('sedes.IDSEDE', '=', '2')
        ->get();  

        } else {

        $elementos = DB::table('elementos')
        ->join('sedes', 'elementos.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('elementos.NOMBRE as nombreElemento', 'elementos.TIPO', 'elementos.USO', 'elementos.FECHACOMPRA', 'elementos.IMGELEMENTO', 'elementos.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->where('sedes.IDSEDE', '=', '3')
        ->get(); 
        }

        return view('views-admin/elementos', compact('elementos'));
    }     
}
