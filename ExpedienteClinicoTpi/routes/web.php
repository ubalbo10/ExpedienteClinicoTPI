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
    return view('welcome');
});

Route::get('Calendar/event','ControllerCalendar@index'); 
Route::get('Calendar/event/{mes}','ControllerCalendar@index_month');
Route::get('Evento/form','ControllerEvent@form');
Route::post('Evento/create','ControllerEvent@create');
Route::get('Evento/details/{id}','ControllerEvent@details');
Route::get('Evento/index','ControllerEvent@index');
Route::get('Evento/index/{month}','ControllerEvent@index_month');
Route::post('Evento/calendario','ControllerEvent@calendario');
Route::get('Registro/Medico','ControllerMedico@registroMedico');
Route::post('Medico/create','ControllerMedico@create');
Route::get('Registro/Paciente','ControllerPaciente@registroPaciente');
Route::post('Paciente/create','ControllerPaciente@create');
Route::get('Registro/Consulta','ControllerConsulta@registroConsulta');
Route::get('Paciente','ControllerPaciente@index');
Route::get('Medico/Listar','ControllerMedico@ListaMedicos');
Route::get('Paciente/Listar','ControllerPaciente@ListaPacientes');

Route::get('admin/layout', function () {
    return view('admin.layout');
});
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
Route::get('test/layout', function () {
    return view('test');
});