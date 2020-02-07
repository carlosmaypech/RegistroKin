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
// Vistas
// Route::get('/', function () {
//     return view('login');
// });
Route::view('inicio','bienvenida');
Route::view('/','usuario.usuario');
Route::view('tutor','tutores.tutores');
Route::post('usuario','AccesoController@validar');
Route::get('logout','AccesoController@salir');

// vista de error

Route::view('error','error');
// 

Route::get('alumno', function () {
    return view('alumnos.index');
});
Route::get('prof', function () {
    return view('profesores.profesor');
});
// Route::get('tu', function () {
//     return view('tutores.tutores');
// });
// Route::get('u', function(){
// 	return view('usuario.usuario');
// });
Route::get('desempenio', function(){
	return view('nota_desempenio.desempenio');
});
Route::get('asistencia', function(){
	return view('alumno_asistencias.asistencias');
});
Route::view('usuarios','usuarios');
//Apis
Route::apiResource('apiAlumno','ApiAlumnoController');
Route::apiResource('apiTutor','ApiTutorController');
Route::apiResource('apiUsuario','ApiUsuarioController');
Route::apiResource('apiProf','ApiProfesorController');
Route::apiResource('apiAsis','ApiAlumno_asistenciasController');
Route::apiResource('apiNota','ApiNota_desempenioController');


