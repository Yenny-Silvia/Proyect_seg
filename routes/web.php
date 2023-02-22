<?php

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
    return view('auth.login');
});

Route::resource('bandeja','App\Http\Controllers\BandejaController');
Route::resource('tramite','App\Http\Controllers\TramiteController');
Route::resource('dependencia','App\Http\Controllers\DependenciaController');
Route::resource('seguimiento','App\Http\Controllers\SeguimientoController');

Route::get('/seguimiento/{id}/registro','App\Http\Controllers\SeguimientoController@seguimientoRegistro');

Route::put('guardarSeguimientoRegistro/{id}/edit','App\Http\Controllers\SeguimientoController@guardarSeguimientoRegistro');

Route::get('/seguimiento/{id}/{id2}/create2','App\Http\Controllers\SeguimientoController@seguimientocreate2');

Route::post('/seguimientocreate2/save2','App\Http\Controllers\SeguimientoController@seguimientoSave2');

Route::resource('subtipotramite','App\Http\Controllers\SubtipotramiteController');

Route::resource('tipotramite','App\Http\Controllers\tipotramiteController');

Route::resource('usuario','App\Http\Controllers\UsuarioController');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('permisos', [Seguridad\PermisosController::class, 'index'])->name('permisos.index');
    Route::get('roles', [Seguridad\RolesController::class, 'index'])->name('roles.index');

    Route::get('usuarios', [Controllers\Admin\UserController::class, 'index'])->name('usuarios.index');





























});
