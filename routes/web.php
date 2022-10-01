<?php

use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\EstadoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/ejemplo.ejemplo', function () {
//     return 'Hola mundo';
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () { 
    
    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

    Route::resource('ambientes', AmbienteController::class);
    Route::resource('inventarios', InventarioController::class);
    Route::resource('elementos', ElementoController::class);
    Route::resource('incidentes', IncidenteController::class);
    Route::resource('estados', EstadoController::class);
    Route::get('Solucion/{incidente}', [App\Http\Controllers\IncidenteController::class,'solucion'])->name('Solucion');
    Route::get('SolucionStore/{incidente}', [App\Http\Controllers\IncidenteController::class,'solucionStore'])->name('SolucionStore');

});
    
    


