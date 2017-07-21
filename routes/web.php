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

//Ruta para el home de la aplicacion
Route::get('/', 'MainController@home');
//Rutas para el controlador del login y registro de usuario
Auth::routes();
//Rutas para el CRUD de Universidad
Route::resource('universidades','UniversitiesController');
//Rutas para el CRUD de Tipos de habilidad
Route::resource('tiposhabilidad','TypeabilitiesController');
//Rutas para el CRUD de roles
Route::resource('roles','RolesController');
//Rutas para el CRUD de naturaleza
Route::resource('naturaleza','NaturesController');
//Rutas para el CRUD de tipo de metodologia
Route::resource('tiposmetodologias','TypemethodologiesController');
//Rutas para el CRUD de tipo de evaluacion
Route::resource('tiposevaluaciones','TypeevaluationsController');
//Rutas para el CRUD de actividades academicas
Route::resource('actividadesacademicas','ActivityacademicsController');
//Rustas para el CRUD de semestres
Route::resource('semestres','SemestersController');
//Rutas para el CRUD de facultades
Route::resource('facultades','FacultiesController');
//Rutas para el CRUD de los programas academicos
Route::resource('programasacademicos','AcademicprogramsController');
//Rutas para el CRUD de las habilidades
Route::resource('habilidades','AbilitiesController');
//Rutas para el CRUD de los planes academicos
Route::resource('planesacademicos','AcademicplansController');
//Ruta que retorna todas las facultades
Route::get('facultad/{university_id?}',["as" => "facultad/",function($university_id){
	return App\Faculty::where('university_id',$university_id)
	->select('id as value', 'nombre as text')->get();
}]);
//Ruta que retorna todas los programas academicos
Route::get('programa/{faculty_id?}',["as" => "programa/",function($faculty_id){
	return App\Academicprogram::where('faculty_id',$faculty_id)
	->select('id as value','nombre as text')->get();
}]);
Route::get('data/{faculty_id?}',['as'=>'data', 'uses' =>'AcademicprogramsController@data']);
//Ruta que da acceso al home de la aplicacion
Route::get('/home', 'HomeController@index');
