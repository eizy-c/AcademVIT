<?php

use Illuminate\Support\Facades\Route;
use App\Models\Permission;
use App\Models\Role;
use App\User;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
	Route::resource('role', 'RoleController');
	Route::resource('aula', 'AulaController');
	Route::resource('user', 'UserController', ['except'=>['create','store']]);
	Route::resource('curso', 'CursoController');
	Route::resource('actividad','ActividadController');
});

Route::middleware(['guest'])->group(function () {
	Route::resource('/', 'HomeController');

});
	Route::resource('leccion','LeccionController');
	Route::resource('nota','NotaController');
	Route::resource('participante','ParticipanteController');
	Route::resource('archivo','ArchivoController');
	Route::resource('multimedia','MultimediaController');
	Route::resource('debate','DebateController');
	
	Route::resource('examen','ExamenController');
