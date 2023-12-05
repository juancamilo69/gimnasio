<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\suplementos;
use DB;

class suplementosController extends Controller
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
        ->select('NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'Otros')
        ->get();      
        }

        return view('suplementos', compact('suplementos'));
    }

    public function store(Request $request) {

        suplementos::create([
            'NOMBRE' => request('nombre'),
            'MARCA' => request('marca'),
            'TIPO' => request('tipo'),
            'DESCRIPCION' => request('descripcion'),
            'STOCK' => request('stock'),
            'PRECIO' => request('precio'),
            'IMGSUPLEMENTO' => request('imgSuplemento'),
            'IMGTABLANUTRICIONAL' => request('imgTablaNutricion')
        ]);

        return redirect()->route('suplementosAdmin');
    }

    public function showDetalle($id)
    {
        $suplemento = suplementos::find($id);

        return view('detalleSuplemento', compact('suplemento'));
    }


}
