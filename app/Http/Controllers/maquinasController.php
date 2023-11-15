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

    // CREAR MÁQUINA

    public function crearMaquinaForm()
    {
        $sedes = sedes::all();
        return view('views-admin/crearMaquina', compact('sedes')); // Nombre de la vista del formulario de creación
    }

    // Método para guardar al cliente en la base de datos
    public function guardarMaquina(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'IDSEDE' => 'required',
            'NOMBREMAQUINA' => 'required',
            'GRUPOMUSCULAR' => 'required',
            'FECHACOMPRA' => 'required',
            'IMGMAQUINA' => 'required',
            'SOPORTE' => 'required',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Crea un nuevo cliente en la base de datos
        $maquinas = maquinas::create([
            'IDSEDE' => $validatedData['IDSEDE'],
            'NOMBREMAQUINA' => $validatedData['NOMBREMAQUINA'],
            'GRUPOMUSCULAR' => $validatedData['GRUPOMUSCULAR'],
            'FECHACOMPRA' => $validatedData['FECHACOMPRA'],
            'IMGMAQUINA' => $validatedData['IMGMAQUINA'],
            'SOPORTE' => $validatedData['SOPORTE'],
            // Agrega más campos según tu base de datos
        ]);

        // Redirige a la vista de clientes o a donde desees
        return redirect()->route('maquinas'); // Reemplaza 'clientes' con la ruta correcta
    }

}
