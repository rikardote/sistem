<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','EmployeesController@index');
Route::get('test','TestController@index');


Route::resource('employees', 'EmployeesController');
Route::get('employees/{num_empleado}/destroy', [
    'uses' => 'EmployeesController@destroy',
    'as' => 'employees.destroy'
]);


Route::resource('deparments', 'DeparmentsController');
Route::get('deparments/{code}/destroy', [
    'uses' => 'DeparmentsController@destroy',
    'as' => 'deparments.destroy'
]);

Route::resource('incidencias', 'IncidenciasController');
Route::get('incidencias/{token}/destroy', [
    'uses' => 'IncidenciasController@destroy',
    'as' => 'incidencias.destroy'
]);

Route::resource('codigosdeincidencias', 'CodigosDeIncidenciasController');
Route::get('codigosdeincidencias/{code}/destroy', [
    'uses' => 'CodigosDeIncidenciasController@destroy',
    'as' => 'codigosdeincidencias.destroy'
]);

Route::resource('periodos', 'PeriodosController');
Route::get('periodos/{id}/destroy', [
    'uses' => 'PeriodosController@destroy',
    'as' => 'periodos.destroy'
]);

Route::resource('qnas', 'QnasController');
Route::get('qnas/{id}/destroy', [
    'uses' => 'QnasController@destroy',
    'as' => 'qnas.destroy'
]);