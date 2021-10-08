<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendedorController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ReporteController;
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

Auth::routes();

// Rutas para el administrador
Route::group(['middleware' => ['role:administrador']], function() {
    Route::get('/administrador', [AdminController::class, 'index'])->name('administrador');
    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
    Route::get('/usuarios/crear', [UsuarioController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/{user}/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
    Route::patch('/usuarios/{user}', [UsuarioController::class, 'update'])->name('usuarios.update');
    Route::get('/usuarios/{user}', [UsuarioController::class, 'show'])->name('usuarios.show');
    Route::delete('/usuarios/{user}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
});

// Rutas para CRUD de los clientes
Route::resource('clientes', 'App\Http\Controllers\ClienteController');

// Rutas para el vendedor
Route::group(['middleware' => ['role:vendedor']], function() {
    Route::get('/vendedor', [VendedorController::class, 'index'])->name('vendedor');
});

// Rutas para gestion de reportes
Route::get('/reportes', [ReporteController::class, 'index'])->name('reportes.index');