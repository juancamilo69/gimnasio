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
        ->select('NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA', 'COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Camisetas')
        ->get();     

        } else if ($ropaRequest == "Esqueletos") {

        $prendas = DB::table('ropa')
        ->select('NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA','COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Esqueletos')
        ->get();        

        } else if ($ropaRequest == "Camisetas Oversize") {

        $prendas = DB::table('ropa')
        ->select('NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA','COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Camisetas Oversize')
        ->get();      

        } else if ($ropaRequest == "Buzos") {

        $prendas = DB::table('ropa')
        ->select('NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA', 'COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Buzos')
        ->get();      

        } else {

        $prendas = DB::table('ropa')
        ->select('NOMBRE', 'TIPO', 'DESCRIPCION', 'STOCK', 'PRECIO', 'TALLA', 'COLOR', 'SEXO', 'MATERIAL', 'IMGPRENDA1', 'IMGPRENDA2', 'IMGPRENDA3')
        ->where('TIPO', '=', 'Otros')
        ->get();       
        }

        return view('views-admin/ropaAdmin', compact('prendas'));
    }
}
