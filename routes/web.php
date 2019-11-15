<?php

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
})->name('home');

Route::get('/empleados', 'EmpleadosController@index')->name('empleados.index');
Route::get('/empleado/{id}', 'EmpleadosController@show')->name('empleado.index');

Route::get('/departamentos', 'DepartamentosController@index')->name('departamentos.index');
Route::get('/departamento/{id}', 'DepartamentosController@show')->name('departamento.index');

Route::get('/proyectos', 'ProyectosController@index')->name('proyectos.index');
