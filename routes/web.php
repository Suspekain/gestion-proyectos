<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/empleados', 'EmpleadosController@index')->name('empleados.index');
Route::get('/empleado/{id}', 'EmpleadosController@show')->name('empleado.show');

Route::get('/departamentos', 'DepartamentosController@index')->name('departamentos.index');
Route::get('/departamento/{id}', 'DepartamentosController@show')->name('departamento.show');

Route::get('/proyectos', 'ProyectosController@index')->name('proyectos.index');
Route::get('/proyecto/{id}', 'ProyectosController@show')->name('proyecto.show');
Route::get('/proyecto/delete/{id}','ProyectosController@delete')->name('proyecto.delete');
