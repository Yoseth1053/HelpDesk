<?php

use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\UsuarioController;
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

Route::get('consulta', [App\Http\Controllers\IncidenteController::class,'consulta'])->name('consulta');
Route::get('procesarConsul', [App\Http\Controllers\IncidenteController::class,'procesar'])->name('procesarConsul');
// Route::post('registrar', [App\Http\Controllers\IncidenteController::class,'store'])->name('procesarConsul');
Route::resource('auth', AuthController::class);



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
    Route::post('ambiente.cambiarEst/{ambiente}', [App\Http\Controllers\AmbienteController::class,'cambiarEst'])->name('ambiente.cambiarEst');

    Route::resource('inventarios', InventarioController::class);

    Route::resource('elementos', ElementoController::class);
    Route::post('elemento.cambiarEst/{elemento}', [App\Http\Controllers\ElementoController::class,'cambiarEst'])->name('elemento.cambiarEst');

    Route::resource('estados', EstadoController::class);
    Route::post('estado.cambiarEst/{estado}', [App\Http\Controllers\EstadoController::class,'cambiarEst'])->name('estado.cambiarEst');


    Route::resource('incidentes', IncidenteController::class);
    Route::get('Solucion/{incidente}', [App\Http\Controllers\IncidenteController::class,'solucion'])->name('Solucion');
    Route::post('SolucionStore/{incidente}', [App\Http\Controllers\IncidenteController::class,'solucionStore'])->name('SolucionStore');
    Route::get('exportarPDF', [App\Http\Controllers\InventarioController::class,'exportarPdf'])->name('exportarPDF');
    
    Route::resource('usuarios', UsuarioController::class);
    Route::post('usuario.cambiarEst/{user}', [App\Http\Controllers\UsuarioController::class,'cambiarEst'])->name('usuario.cambiarEst');


    Route::resource('cargos', CargoController::class);
    Route::post('cambiarEst/{cargo}', [App\Http\Controllers\CargoController::class,'cambiarEst'])->name('cambiarEst');

});
    
    


