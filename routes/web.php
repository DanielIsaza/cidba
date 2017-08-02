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
//Rutas para el CRUD de Estados
Route::resource('estados','StatesController');
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
//Rutas para el CRUD de los espacios academicos
Route::resource('espaciosacademicos','AcademicspacesController');
//Rutas para el CRUD de los objetivos
Route::resource('objetivos','ObjectivesController');
//Rutas para el manejo de la asignación de los pesos
Route::resource('asignacion','ObjectivespacesController');
//Rutas para autorización de usuarios
Route::resource('autoriza','AutorizesController');
//Rutas para el manejo de la asignación teorica de los pesos
Route::resource('asignacionTeorica','ObjectivesspacesTController');
// permite obtener las gráficas estadisticas 
Route::get('/estadistica','Objetiveespaces@estadistica');
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
// Ruta que permite obtener la informacion necesaria para mostrar en la tabla de planes
Route::get('planes/{program_id?}',["as" => "planes/",function($program_id){
	return	DB::table('academicplans')
	->join('states','states.id','=','academicplans.state_id')
	->where('academicplans.academicprogram_id',$program_id)
	->select('academicplans.id as value','academicplans.nombre as text','states.nombre as estado')->get();
}]);
//Ruta que permite obtener los perfiles asociados a un plan academico
Route::get('perfiles/{academicplan_id?}',["as"=>"perfiles/",function($academicplan_id){
	return App\Profile::where('academicplan_id',$academicplan_id)
			->select('id as value','descripcion as text')->get();
}]);
//Ruta que retorna las habilidades definidas en un perfil
Route::get('habilidad/{profile_id?}',["as"=>"habilidad/",function($profile_id){
	return App\Ability::where('profile_id',$profile_id)
	->select('id as value','nombre as text','peso as peso')->get();
}]);
//Ruta que retorna las habilidades definidas en un perfil
Route::get('habilidad/{typeability_id?}',["as"=>"habilidad",function($typeability_id){
	return App\Ability::where('typeability_id',$typeability_id)
	->select('id as value','nombre as text','peso as peso')->get();
}]);
//Ruta que retorna las materias de un semestre y un plan definido
Route::get('materias/{semester_id?}/{academicplan_id?}',["as"=>"materias",function($semester_id,$academicplan_id){
	return App\Academicspace::where([['semester_id','=',$semester_id],['academicplan_id','=',$academicplan_id]])->select('id as value','nombre as text')->get();
}]);
//Ruta que retorna las materias de un semestre y un plan definido
Route::get('materia/{academicplan_id?}',["as"=>"materia",function($academicplan_id){
	return App\Academicspace::where('academicplan_id',$academicplan_id)->select('id as value','nombre as text')->get();
}]);
//Ruta que permite tener el valor de los objetivos de una habilidad
Route::get('objetivo/{ability_id?}',["as"=>"objetivo/",function($ability_id){
	return App\Objective::where('ability_id',$ability_id)->select('id as value','nombre as text','peso')->get();
}]);
//Ruta que obtiene los espacios académicos y objetivos que son afectados por cada uno
Route::get('prueba/{ability_id?}',["as"=>"prueba",function($ability_id){
	return DB::table('abilities')
	->join('weights','abilities.id','=','weights.ability_id')
	->join('objectiveespaces','objectiveespaces.id','=','weights.objectiveEspace_id')
	->join('objectives','objectives.id','=','objectiveespaces.objective_id')
	->join('academicspaces','academicspaces.id','=','objectiveespaces.academicspace_id')
	->where('abilities.id',$ability_id)->select('weights.id as value','academicspaces.nombre as text','weights.peso','objectives.nombre as objetivos','objectives.peso as pesohabilidad')->get();
}]);
//Ruta que da acceso al home de la aplicacion
Route::get('/home', 'HomeController@index');