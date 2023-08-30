<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\sedes;
use App\Models\tipomembresias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class clientesController extends Controller
{
    public function index(Request $request)
    {
        $tipomembresia = $request->tipoPlan;

        if($tipomembresia == "P1") {
            $usuarios = DB::table('membresias')
            ->join('users', 'membresias.id', '=', 'users.id')
            ->join('tipomembresias', 'membresias.IDTIPOSMEMBRESIAS', '=', 'tipomembresias.IDTIPOSMEMBRESIAS')
            ->join('sedes', 'users.IDSEDE', '=', 'sedes.IDSEDE')
            ->select('users.name', 'users.email', 'sedes.CIUDAD', 'sedes.direccion', 'tipomembresias.NOMBREMEMBRESIA', 'tipomembresias.PRECIO', 'tipomembresias.DURACIONMESES', 'tipomembresias.PLANPAREJA', 'membresias.FECHAMEMBRESIAINICIO', 'FECHAMEMBRESIAFINAL')
            ->get();        
        } else {
            $usuarios = DB::table('membresias')
            ->join('users as cliente1', 'membresias.id', '=', 'cliente1.id')
            ->join('users as cliente2', 'membresias.id2', '=', 'cliente2.id')
            ->join('tipomembresias', 'membresias.IDTIPOSMEMBRESIAS', '=', 'tipomembresias.IDTIPOSMEMBRESIAS')
            ->join('sedes', 'cliente1.IDSEDE', '=', 'sedes.IDSEDE')
            ->select('cliente1.name', 'cliente2.name as name2', 'cliente1.email', 'cliente2.email as email2', 'sedes.CIUDAD', 'sedes.direccion', 'tipomembresias.NOMBREMEMBRESIA', 'tipomembresias.PRECIO', 'tipomembresias.DURACIONMESES', 'tipomembresias.PLANPAREJA', 'membresias.FECHAMEMBRESIAINICIO', 'FECHAMEMBRESIAFINAL')
            ->get();
        }
        return view('views-admin/planpareja', compact('usuarios'));
    }
}
