<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Tipomembresias;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/register', function () {
    return view('register');
})->middleware(['auth', 'verified'])->name('register');

Route::get('/detalleRopaHombre', function () {
    return view('detalleRopaHombre');
})->middleware(['auth', 'verified'])->name('detalleRopaHombre');

Route::get('/detalleRopaMujer', function () {
    return view('detalleRopaMujer');
})->middleware(['auth', 'verified'])->name('detalleRopaMujer');

Route::get('/detalleSuplemento', function () {
    return view('detalleSuplemento');
})->middleware(['auth', 'verified'])->name('detalleSuplemento');

Route::get('/sedes', function () {
    return view('sedes');
})->middleware(['auth', 'verified'])->name('sedes');

Route::get('/sedesTunja', function () {
    return view('sedesTunja');
})->middleware(['auth', 'verified'])->name('sedesTunja');

Route::get('/sedesBarbosa', function () {
    return view('sedesBarbosa');
})->middleware(['auth', 'verified'])->name('sedesBarbosa');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/viewAdmin', function () {
    return view('viewAdmin');
})->middleware(['auth', 'verified'])->name('viewAdmin');

Route::get('/planpareja', function () {
    return view('views-admin/planpareja');
})->middleware(['auth', 'verified'])->name('planpareja');

Route::get('/maquinas', function () {
    return view('views-admin/maquinas');
})->middleware(['auth', 'verified'])->name('maquinas');

// SIN AUTENTICACIÓN

Route::get('/suplementos', function () {
     return view('suplementos');
});

Route::get('/suplementos', function () {
     return view('suplementos');
})->middleware(['auth', 'verified'])->name('suplementos');

Route::get('/sexoRopa', function () {
    return view('sexoRopa');
});

Route::get('/sexoRopa', function () {
    return view('sexoRopa');
})->middleware(['auth', 'verified'])->name('sexoRopa');

Route::get('/ropaMujer', function () {
    return view('ropaMujer');
});

Route::get('/ropaMujer', function () {
    return view('ropaMujer');
})->middleware(['auth', 'verified'])->name('ropaMujer');

Route::get('/ropaHombre', function () {
    return view('ropaHombre');
});

Route::get('/ropaHombre', function () {
    return view('ropaHombre');
})->middleware(['auth', 'verified'])->name('ropaHombre');

Route::get('/suplementosAdmin', function () {
    return view('views-admin/suplementosAdmin');
})->middleware(['auth', 'verified'])->name('suplementosAdmin');

Route::get('/crearCliente', function () {
    return view('views-admin/crearCliente');
})->middleware(['auth', 'verified'])->name('crearCliente');

Route::get('/crearRopa', function () {
    return view('views-admin/crearRopa');
})->middleware(['auth', 'verified'])->name('crearRopa');

Route::get('/crearSuplementos', function () {
    return view('views-admin/crearSuplementos');
})->middleware(['auth', 'verified'])->name('crearSuplementos');

Route::get('/editarMembresia', function () {
    return view('views-admin/editarMembresia');
})->middleware(['auth', 'verified'])->name('editarMembresia');

// Editar suplementos

Route::get('views-admin/editarSuplemento/{IDSUPLEMENTO}', [App\Http\Controllers\suplementosAdminController::class, 'edit'])->name('suplementosAdmin.edit');
Route::put('suplementosAdmin/{IDSUPLEMENTO}', [App\Http\Controllers\suplementosAdminController::class, 'update'])->name('suplementosAdmin.update');

// Editar Ropa

Route::get('views-admin/editarRopa/{IDROPA}', [App\Http\Controllers\ropaAdminController::class, 'edit'])->name('ropaAdmin.edit');
Route::put('ropaAdmin/{IDROPA}', [App\Http\Controllers\ropaAdminController::class, 'update'])->name('ropaAdmin.update');

// Editar Elementos

Route::get('views-admin/editarElemento/{IDELEMENTO}', [App\Http\Controllers\elementosController::class, 'edit'])->name('elementos.edit');
Route::put('elementos/{IDELEMENTO}', [App\Http\Controllers\elementosController::class, 'update'])->name('elementos.update');

// Editar Máquinas

Route::get('views-admin/editarMaquina/{IDEQUIPO}', [App\Http\Controllers\maquinasController::class, 'edit'])->name('maquinas.edit');
Route::put('maquinas/{IDEQUIPO}', [App\Http\Controllers\maquinasController::class, 'update'])->name('maquinas.update');

// Editar Clientes

Route::get('views-admin/editarCliente/{id}', [App\Http\Controllers\clientesController::class, 'edit'])->name('editarCliente');
Route::put('/actualizarCliente/{id}', [App\Http\Controllers\clientesController::class, 'update'])->name('actualizarCliente');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para información de las membresías

Route::get('/dashboard', [App\Http\Controllers\infoMembresiasController::class, 'index'])->name('dashboard');

Route::get('/clientes', [App\Http\Controllers\clientesController::class, 'index'])->name('clientes');

// Crear usuarios

// Ruta para mostrar el formulario de creación
Route::get('/crear-cliente', 'App\Http\Controllers\clientesController@crearClienteForm')->name('crearClienteForm');

// validacion CSRF
Route::post('/guardar-cliente', 'clientesController@guardarCliente')->name('guardarCliente')->middleware('web');

// Ruta para procesar el formulario de creación
Route::post('/guardar-cliente', 'App\Http\Controllers\clientesController@guardarCliente')->name('guardarCliente');

// Asignar membresía a usuarios

// Ruta para mostrar el formulario de creación
Route::get('/crear-membresia', 'App\Http\Controllers\clientesController@crearMembresiaForm')->name('crearMembresiaForm');

// validacion CSRF
Route::post('/guardar-membresia', 'clientesController@guardarMembresia')->name('guardarMembresia')->middleware('web');

// Ruta para procesar el formulario de creación
Route::post('/guardar-membresia', 'App\Http\Controllers\clientesController@guardarMembresia')->name('guardarMembresia');

Route::get('/maquinas', [App\Http\Controllers\maquinasController::class, 'index'])->name('maquinas');

// Crear máquinas

// Ruta para mostrar el formulario de creación
Route::get('/crear-maquina', 'App\Http\Controllers\maquinasController@crearMaquinaForm')->name('crearMaquinaForm');

// validacion CSRF
Route::post('/guardar-maquina', 'maquinasController@guardarMaquina')->name('guardarMaquina')->middleware('web');

// Ruta para procesar el formulario de creación
Route::post('/guardar-Maquina', 'App\Http\Controllers\maquinasController@guardarMaquina')->name('guardarMaquina');

// Elementos

Route::get('/elementos', [App\Http\Controllers\elementosController::class, 'index'])->name('elementos');

// Crear Elementos

// Ruta para mostrar el formulario de creación
Route::get('/crear-elemento', 'App\Http\Controllers\elementosController@crearElementoForm')->name('crearElementoForm');

// validacion CSRF
Route::post('/guardar-elemento', 'elementosController@guardarElemento')->name('guardarElemento')->middleware('web');

// Ruta para procesar el formulario de creación
Route::post('/guardar-elemento', 'App\Http\Controllers\elementosController@guardarElemento')->name('guardarElemento');

Route::get('/suplementos', [App\Http\Controllers\suplementosController::class, 'index'])->name('suplementos');

Route::get('/ropaMujer', [App\Http\Controllers\ropaMujerController::class, 'index'])->name('ropaMujer');

Route::get('/ropaHombre', [App\Http\Controllers\ropaHombreController::class, 'index'])->name('ropaHombre');

Route::get('/suplementosAdmin', [App\Http\Controllers\suplementosAdminController::class, 'index'])->name('suplementosAdmin');

Route::get('/ropaAdmin', [App\Http\Controllers\ropaAdminController::class, 'index'])->name('ropaAdmin');

Route::post('/crearRopa', [App\Http\Controllers\ropaController::class, 'store'])->name('crearRopa.store');

Route::get('/{prendas}/eliminar', [App\Http\Controllers\ropaAdminController::class, 'destroy'])->name('eliminarRopa.destroy');

Route::post('/crearSuplementos', [App\Http\Controllers\suplementosController::class, 'store'])->name('crearSuplementos.store');

// Route::get('/{suplementos}/eliminar', [App\Http\Controllers\suplementosAdminController::class, 'destroy'])->name('eliminarSuplementos.destroy');

Route::get('/eliminars/{id}', [App\Http\Controllers\suplementosAdminController::class, 'destroy'])->name('suplementos.destroy');

Route::get('/eliminar/{id}', [App\Http\Controllers\maquinasController::class, 'destroy'])->name('maquinas.destroy');

Route::get('/eliminar/{id}', [App\Http\Controllers\elementosController::class, 'destroy'])->name('elementos.destroy');

Route::get('/', function () {
    $membresiasData = Tipomembresias::orderBy('PRECIO', 'ASC')->get();
    return view('welcome', ['membresiasData' => $membresiasData]);
});


require __DIR__.'/auth.php';
