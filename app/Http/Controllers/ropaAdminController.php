<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ropa;
use DB;

class ropaAdminController extends Controller
{
    public function index(Request $request) {
        $ropaRequest = $request->seleccionarRopa;
        if($ropaRequest == "Camisetas" || $ropaRequest == null) {

        $prendas = DB::table('ropa')
        ->select('IDROPA', 'NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA', 'COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Camisetas')
        ->get();     

        } else if ($ropaRequest == "Esqueletos") {

        $prendas = DB::table('ropa')
        ->select('IDROPA', 'NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA','COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Esqueletos')
        ->get();        

        } else if ($ropaRequest == "Camisetas Oversize") {

        $prendas = DB::table('ropa')
        ->select('IDROPA', 'NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA','COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Camisetas Oversize')
        ->get();      

        } else if ($ropaRequest == "Buzos") {

        $prendas = DB::table('ropa')
        ->select('IDROPA', 'NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA', 'COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Buzos')
        ->get();      

        } else {

        $prendas = DB::table('ropa')
        ->select('IDROPA', 'NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA', 'COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Otros')
        ->get();       
        }

        return view('views-admin/ropaAdmin', compact('prendas'));
    }

    public function destroy(String $IDROPA) {
        $prendas = ropa::findOrfail($IDROPA);
        $prendas -> delete();
        return redirect()->route('ropaAdmin');
    }

    public function edit($IDROPA)
    {
        $prendas = ropa::find($IDROPA);
        return view('views-admin.editarRopa', compact('prendas'));
    }

    public function update(Request $request, $IDROPA)
    {
        $prendas = ropa::find($IDROPA);
        
        $prendas->NOMBRE = $request->input('nombre');
        $prendas->TIPO = $request->input('tipo');
        $prendas->DESCRIPCION = $request->input('descripcion');
        $prendas->STOCK = $request->input('stock');
        $prendas->PRECIO = $request->input('precio');
        $prendas->TALLA = $request->input('talla');
        $prendas->COLOR = $request->input('color');
        $prendas->SEXO = $request->input('sexo');
        $prendas->MATERIAL = $request->input('material');
        // Puedes agregar la lógica para manejar las imágenes si es necesario
        
        $prendas->save();

        return redirect()->route('ropaAdmin');
    }
}
