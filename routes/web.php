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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas para información de las membresías

Route::get('/dashboard', [App\Http\Controllers\infoMembresiasController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    $membresiasData = Tipomembresias::orderBy('PRECIO', 'ASC')->get();
    return view('welcome', ['membresiasData' => $membresiasData]);
});

require __DIR__.'/auth.php';
