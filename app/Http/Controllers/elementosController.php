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
        ->select('elementos.IDELEMENTO', 'elementos.NOMBRE as nombreElemento', 'elementos.TIPO', 'elementos.USO', 'elementos.FECHACOMPRA', 'elementos.IMGELEMENTO', 'elementos.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->where('sedes.IDSEDE', '=', '1')
        ->get();

         } else if ($elementoSede == "S2") {

        $elementos = DB::table('elementos')
        ->join('sedes', 'elementos.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('elementos.IDELEMENTO', 'elementos.NOMBRE as nombreElemento', 'elementos.TIPO', 'elementos.USO', 'elementos.FECHACOMPRA', 'elementos.IMGELEMENTO', 'elementos.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->where('sedes.IDSEDE', '=', '2')
        ->get();  

        } else {

        $elementos = DB::table('elementos')
        ->join('sedes', 'elementos.IDSEDE', '=', 'sedes.IDSEDE')
        ->select('elementos.IDELEMENTO', 'elementos.NOMBRE as nombreElemento', 'elementos.TIPO', 'elementos.USO', 'elementos.FECHACOMPRA', 'elementos.IMGELEMENTO', 'elementos.SOPORTE', 'sedes.NOMBRE as nombreSede', 'sedes.CIUDAD', 'sedes.DIRECCION')
        ->where('sedes.IDSEDE', '=', '3')
        ->get(); 
        }

        return view('views-admin/elementos', compact('elementos'));
    }     

    // CREAR ELEMENTO

    public function crearElementoForm()
    {
        $sedes = sedes::all();
        return view('views-admin/crearElemento', compact('sedes')); // Nombre de la vista del formulario de creación
    }

    // Método para guardar al cliente en la base de datos
    public function guardarElemento(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'IDSEDE' => 'required',
            'NOMBRE' => 'required',
            'TIPO' => 'required',
            'USO' => 'required',
            'FECHACOMPRA' => 'required',
            'IMGELEMENTO' => 'required',
            'SOPORTE' => 'required',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Crea un nuevo cliente en la base de datos
        $elementos = elementos::create([
            'IDSEDE' => $validatedData['IDSEDE'],
            'NOMBRE' => $validatedData['NOMBRE'],
            'TIPO' => $validatedData['TIPO'],
            'USO' => $validatedData['USO'],
            'FECHACOMPRA' => $validatedData['FECHACOMPRA'],
            'IMGELEMENTO' => $validatedData['IMGELEMENTO'],
            'SOPORTE' => $validatedData['SOPORTE'],
            // Agrega más campos según tu base de datos
        ]);

        // Redirige a la vista de clientes o a donde desees
        return redirect()->route('elementos'); // Reemplaza 'clientes' con la ruta correcta
    }

    public function edit($IDELEMENTO)
    {
        $elementos = elementos::find($IDELEMENTO);
        return view('views-admin.editarElemento', compact('elementos'));
    }

    public function update(Request $request, $IDELEMENTO)
    {
        $elementos = elementos::find($IDELEMENTO);
        
        $elementos->IDSEDE = $request->input('idsede');
        $elementos->NOMBRE = $request->input('nombre');
        $elementos->TIPO = $request->input('tipo');
        $elementos->USO = $request->input('uso');
        $elementos->FECHACOMPRA = $request->input('fechacompra');
        $elementos->IMGELEMENTO = $request->input('imgelemento');
        $elementos->SOPORTE = $request->input('soporte');
        // Puedes agregar la lógica para manejar las imágenes si es necesario
        
        $elementos->save();

        return redirect()->route('elementos');
    }
}
