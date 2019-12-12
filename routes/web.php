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
Route::get('/proyecto/edit/{id}','ProyectosController@edit')->name('proyecto.edit');
Route::post('/proyecto/update/{id}','ProyectosController@update')->name('proyecto.update');
Route::get('create','ProyectosController@create')->name('proyecto.create');
Route::post('store','ProyectosController@store')->name('proyecto.store');
