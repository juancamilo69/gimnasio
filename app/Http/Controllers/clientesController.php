<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\sedes;
use App\Models\tipomembresias;
use App\Models\membresias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class clientesController extends Controller
{
    public function index(Request $request)
    {
        $tipomembresia = $request->tipoPlan;
        if($tipomembresia == "P1" || $tipomembresia == null) {

            $usuarios = DB::table('membresias')
            ->join('users', 'membresias.id', '=', 'users.id')
            ->join('tipomembresias', 'membresias.IDTIPOSMEMBRESIAS', '=', 'tipomembresias.IDTIPOSMEMBRESIAS')
            ->join('sedes', 'users.IDSEDE', '=', 'sedes.IDSEDE')
            ->select('users.name', 'users.email', 'sedes.CIUDAD', 'sedes.direccion', 'tipomembresias.NOMBREMEMBRESIA', 'tipomembresias.PRECIO', 'tipomembresias.DURACIONMESES', 'tipomembresias.PLANPAREJA', 'membresias.FECHAMEMBRESIAINICIO', 'FECHAMEMBRESIAFINAL')
            ->where('tipomembresias.PLANPAREJA', '=', 'No')
            ->get();        
         } else {
            $usuarios = DB::table('membresias')
            ->join('users as cliente1', 'membresias.id', '=', 'cliente1.id')
            ->join('users as cliente2', 'membresias.id2', '=', 'cliente2.id')
            ->join('tipomembresias', 'membresias.IDTIPOSMEMBRESIAS', '=', 'tipomembresias.IDTIPOSMEMBRESIAS')
            ->join('sedes', 'cliente1.IDSEDE', '=', 'sedes.IDSEDE')
            ->select('cliente1.name', 'cliente2.name as name2', 'cliente1.email', 'cliente2.email as email2', 'sedes.CIUDAD', 'sedes.direccion', 'tipomembresias.NOMBREMEMBRESIA', 'tipomembresias.PRECIO', 'tipomembresias.DURACIONMESES', 'tipomembresias.PLANPAREJA', 'membresias.FECHAMEMBRESIAINICIO', 'FECHAMEMBRESIAFINAL')
            ->where('tipomembresias.PLANPAREJA', '=', 'Si')
            ->get();       
        }
        //return $tipomembresia;
        return view('views-admin/clientes', compact('usuarios'));
    }

    // CREAR CLIENTE

    public function crearClienteForm()
    {
        $sedes = sedes::all();
        return view('views-admin/crearCliente', compact('sedes')); // Nombre de la vista del formulario de creación
    }

    // Método para guardar al cliente en la base de datos
    public function guardarCliente(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'IDSEDE' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Crea un nuevo cliente en la base de datos
        $cliente = users::create([
            'name' => $validatedData['name'],
            'IDSEDE' => $validatedData['IDSEDE'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Asegúrate de hashear la contraseña
            // Agrega más campos según tu base de datos
        ]);

        // Redirige a la vista de clientes o a donde desees
        return redirect()->route('clientes'); // Reemplaza 'clientes' con la ruta correcta
    }

    // ASIGNAR MEMBRESIAS

    public function crearMembresiaForm()
    {
        $membresiasData = Tipomembresias::all();
        return view('views-admin/crearMembresia', compact('membresiasData')); // Nombre de la vista del formulario de creación
    }

    // Método para guardar al cliente en la base de datos
    public function guardarMembresia(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'id' => 'required',
            'id2' => 'nullable',
            'IDTIPOSMEMBRESIAS' => 'required',
            'FECHAMEMBRESIAINICIO' => 'required',
            'FECHAMEMBRESIAFINAL' => 'required',
            'MONTOPAGO' => 'required',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Crea un nuevo cliente en la base de datos
        $membresia = membresias::create([
            'id' => $validatedData['id'],
            'id2' => $validatedData['id2'],
            'IDTIPOSMEMBRESIAS' => $validatedData['IDTIPOSMEMBRESIAS'],
            'FECHAMEMBRESIAINICIO' => $validatedData['FECHAMEMBRESIAINICIO'],
            'FECHAMEMBRESIAFINAL' => $validatedData['FECHAMEMBRESIAFINAL'],
            'MONTOPAGO' => $validatedData['MONTOPAGO'],
            // Agrega más campos según tu base de datos
        ]);

        // Redirige a la vista de clientes o a donde desees
        return redirect()->route('clientes'); // Reemplaza 'clientes' con la ruta correcta
    }
}
