<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\suplementos;
use DB;

class suplementosAdminController extends Controller
{
    public function index(Request $request) {
        $suplementosRequest = $request->seleccionarSuplemento;
        if($suplementosRequest == "Creatina" || $suplementosRequest == null) {

        $suplementos = DB::table('suplementos')
        ->select('IDSUPLEMENTO', 'NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'creatina')
        ->get();     

        } else if ($suplementosRequest == "Proteina") {

        $suplementos = DB::table('suplementos')
        ->select('IDSUPLEMENTO', 'NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'Proteína')
        ->get();       

        } else if ($suplementosRequest == "Aminoacidos") {

        $suplementos = DB::table('suplementos')
        ->select('IDSUPLEMENTO', 'NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'Aminoácidos')
        ->get();      

        } else if ($suplementosRequest == "Boosters") {

        $suplementos = DB::table('suplementos')
        ->select('IDSUPLEMENTO', 'NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'Boosters')
        ->get();      

        } else {

        $suplementos = DB::table('suplementos')
        ->select('IDSUPLEMENTO', 'NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'Otros')
        ->get();      
        }

        return view('views-admin/suplementosAdmin', compact('suplementos'));
    }

    public function destroy(String $IDSUPLEMENTO) {
        $suplementos = suplementos::findOrfail($IDSUPLEMENTO);
        $suplementos -> delete();

        return redirect()->route('suplementosAdmin'); 
    }

    public function edit($IDSUPLEMENTO)
    {
        $suplemento = suplementos::find($IDSUPLEMENTO);
        return view('views-admin.editarSuplemento', compact('suplemento'));
    }

    public function update(Request $request, $IDSUPLEMENTO)
    {
        $suplemento = suplementos::find($IDSUPLEMENTO);
        
        $suplemento->NOMBRE = $request->input('nombre');
        $suplemento->MARCA = $request->input('marca');
        $suplemento->TIPO = $request->input('tipo');
        $suplemento->DESCRIPCION = $request->input('descripcion');
        $suplemento->STOCK = $request->input('stock');
        $suplemento->PRECIO = $request->input('precio');
        // Puedes agregar la lógica para manejar las imágenes si es necesario
        
        $suplemento->save();

        return redirect()->route('suplementosAdmin');
    }
}