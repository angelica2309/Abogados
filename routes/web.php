<?php

use App\Http\Controllers\AbogadoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\ExpedienteController;
use App\Http\Controllers\ProcuradorController;

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
    return view('home');
})->middleware('auth');

Route::get('/login',[SessionController::class, 'create'])->name('login.index');
Route::post('/login',[SessionController::class, 'store'])->name('login.store');
Route::get('/logout',[SessionController::class, 'destroy'])->name('login.destroy');

Route::get('/register',[RegistroController::class, 'create'])->name('register.index');
Route::post('/register',[RegistroController::class, 'store'])->name('register.store');

Route::get('/abogado/index',[AbogadoController::class, 'index'])->name('abogado.index')->middleware('auth');
Route::get('/abogado/create',[AbogadoController::class, 'create'])->name('abogado.create')->middleware('auth');
Route::post('/abogado/create',[AbogadoController::class, 'store'])->name('abogado.store')->middleware('auth');
Route::post('/abogado/update/{id}',[AbogadoController::class, 'update'])->name('abogado.update')->middleware('auth');
Route::get('/abogado/edit/{id}',[AbogadoController::class, 'edit'])->name('abogado.edit')->middleware('auth');



Route::get('/procurador/index',[ProcuradorController::class, 'index'])->name('procurador.index')->middleware('auth');
Route::get('/procurador/create',[ProcuradorController::class, 'create'])->name('procurador.create')->middleware('auth');
Route::post('/procurador/create',[ProcuradorController::class, 'store'])->name('procurador.store')->middleware('auth');
Route::post('/procurador/update/{id}',[ProcuradorController::class, 'update'])->name('procurador.update')->middleware('auth');
Route::get('/procurador/edit/{id}',[ProcuradorController::class, 'edit'])->name('procurador.edit')->middleware('auth');



Route::get('/cliente/index',[ClienteController::class, 'index'])->name('cliente.index')->middleware('auth');
Route::get('/cliente/create',[ClienteController::class, 'create'])->name('cliente.create')->middleware('auth');
Route::post('/cliente/create',[ClienteController::class, 'store'])->name('cliente.store')->middleware('auth');
Route::post('/cliente/update/{id}',[ClienteController::class, 'update'])->name('cliente.update')->middleware('auth');
Route::get('/cliente/edit/{id}',[ClienteController::class, 'edit'])->name('cliente.edit')->middleware('auth');


Route::get('/caso/index',[CasoController::class, 'index'])->name('caso.index')->middleware('auth');
Route::get('/caso/create/{id}',[CasoController::class, 'create'])->name('caso.create')->middleware('auth');
Route::post('/caso/store',[CasoController::class, 'store'])->name('caso.store')->middleware('auth');
Route::get('/caso/mycase/{id}',[CasoController::class, 'mycase'])->name('caso.mycase')->middleware('auth');
Route::get('/caso/show/{id}',[CasoController::class, 'show'])->name('caso.show')->middleware('auth');
Route::post('/caso/update/{id}',[CasoController::class, 'update'])->name('caso.update')->middleware('auth');
Route::get('/caso/estado/{id}',[CasoController::class, 'estado'])->name('caso.estado')->middleware('auth');
Route::post('/caso/editar/{id}',[CasoController::class, 'editar'])->name('caso.editar')->middleware('auth');
Route::get('/caso/edit/{id}',[CasoController::class, 'edit'])->name('caso.edit')->middleware('auth');
Route::get('/caso/mycaseprocurador/{id}',[CasoController::class, 'mycaseprocurador'])->name('caso.mycaseprocurador')->middleware('auth');
Route::get('/caso/mycaseabogado/{id}',[CasoController::class, 'mycaseabogado'])->name('caso.mycaseabogado')->middleware('auth');

Route::get('/expediente/index/{id}',[ExpedienteController::class, 'index'])->name('expediente.index')->middleware('auth');
Route::get('/expediente/create/{id}',[ExpedienteController::class, 'create'])->name('expediente.create')->middleware('auth');
Route::post('/expediente/store',[ExpedienteController::class, 'store'])->name('expediente.store')->middleware('auth');
//Route::get('/caso/show/{id}',[ExpedienteController::class, 'show'])->name('expediente.show')->middleware('auth');
Route::get('expediente/imprimir/{id}',[ExpedienteController::class,'imprimir'])->name('expediente.imprimir')->middleware('auth');