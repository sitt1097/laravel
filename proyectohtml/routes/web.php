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
    return view('welcome');
});

Route::get('estudiante', function () {
    return view('paginaestudiante');
});

Route::get('prof', function () {
    return view('paginaprofesor');
});

Route::get('egresado', function () {
    return view('paginaegresado');
});

Route::get('empresario', function () {
    return view('paginaempresario');
});

Route::get('menu', function () {
    return view('menuprincipal');
});

Route::get('mensaje', function () {
    return view('mensajes/mensajesdepase');
});
Route::get('mensajebloqueo', function () {
    return view('mensajes/mensajedebloqueo');
});
Route::get('mensajeagregados', function () {
    return view('mensajes/mensajeagregado');
});
Route::get('mensajemodificados', function () {
    return view('mensajes/mensajemodificado');
});
Route::get('mensajeeliminar', function () {
    return view('mensajes/mensajedeeliminar');
});
Route::get('menuagregaradm', function () {
    return view('administrador/agregar/tipodeusuarios');
});
Route::get('menueliminaradm', function () {
    return view('administrador/agregar/tipodeusuarios');
});
Route::get('menumodificaradm', function () {
    return view('administrador/agregar/tipodeusuarios');
});