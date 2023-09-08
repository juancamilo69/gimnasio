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
        ->select('NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'creatina')
        ->get();     

        } else if ($suplementosRequest == "Proteina") {

        $suplementos = DB::table('suplementos')
        ->select('NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'proteína')
        ->get();       

        } else if ($suplementosRequest == "Aminoacidos") {

        $suplementos = DB::table('suplementos')
        ->select('NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'Aminoácidos')
        ->get();      

        } else if ($suplementosRequest == "Boosters") {

        $suplementos = DB::table('suplementos')
        ->select('NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'Booster')
        ->get();      

        } else {

        $suplementos = DB::table('suplementos')
        ->select('NOMBRE', 'MARCA', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'IMGSUPLEMENTO', 'IMGTABLANUTRICIONAL')
        ->where('TIPO', '=', 'Relajante Muscular')
        ->get();      
        }

        return view('suplementos', compact('suplementos'));
    }
}
