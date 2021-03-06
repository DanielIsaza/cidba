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

//Rutas para el controlador del login y registro de usuario
Auth::routes();

Route::group(['middleware' => 'auth'],function(){
	//Rutas para el CRUD de Universidad
	Route::resource('universidades','UniversitiesController');
	//Ruta para el home de la aplicacion
Route::get('/', 'HomeController@index');
//'MainController@home');
Route::get('import','FacultiesController@import');
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
//Rutas para el CRUD de las áreas de conocimiento
Route::resource('areasconocimiento','KnowledgeareasController');
// permite obtener las gráficas estadisticas
Route::get('estadistica','StatisticsController@index');
// permite obtener las gráficas estadisticas
Route::get('estadisticaAreaConocimiento','StatisticsController@indexA');
// permite obtener tabla resumen con los datos
Route::get('tablaResumen','StatisticsController@indexT');
// permite realizar la descarga del syllabus de un espacio académico
Route::get('descarga/{espacio_id?}','PdfController@descarga1');
//
Route::get('formulario','PdfController@formulario');
Route::post('subir','PdfController@subir');

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
//Ruta que retorna las habilidades definidas en un perfil
Route::get('habilidad/{academicplan_id?}',["as"=>"habilidad/",function($academicplan_id){
	return App\Ability::where('academicplan_id',$academicplan_id)
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
Route::get('objetivosreal/{ability_id?}',["as"=>"objetivosreal",function($ability_id){
	return DB::table('abilities')
	->join('weights','abilities.id','=','weights.ability_id')
	->join('objectiveespaces','objectiveespaces.id','=','weights.objectiveEspace_id')
	->join('objectives','objectives.id','=','objectiveespaces.objective_id')
	->join('academicspaces','academicspaces.id','=','objectiveespaces.academicspace_id')
	->where([['abilities.id','=',$ability_id],['weights.tipo','=','1']])->select('objectiveespaces.id as value','academicspaces.nombre as text','weights.peso','objectives.nombre as objetivos','objectives.peso as pesohabilidad')->get();
}]);
//Ruta que obtiene los espacios académicos y objetivos que son afectados por cada uno
Route::get('objetivosteo/{ability_id?}',["as"=>"objetivosteo",function($ability_id){
	return DB::table('abilities')
	->join('weights','abilities.id','=','weights.ability_id')
	->join('objectiveespaces','objectiveespaces.id','=','weights.objectiveEspace_id')
	->join('objectives','objectives.id','=','objectiveespaces.objective_id')
	->join('academicspaces','academicspaces.id','=','objectiveespaces.academicspace_id')
	->where('abilities.id','=',$ability_id)->select('objectiveespaces.id as value','academicspaces.nombre as text','weights.peso','objectives.nombre as objetivos','objectives.peso as pesohabilidad')->get();
}]);
// Ruta que retorna la información estadistica de las habilidades
Route::get('estadisticah/{plan_id?}/{tipo?}',["as"=>"estadisticah",function($plan_id,$tipo){
	return DB::table('academicplans')
	->join('abilities','academicplans.id','=','abilities.academicplan_id')
	->join('objectives','abilities.id','=','objectives.ability_id')
	->join('objectiveespaces','objectives.id','=','objectiveespaces.objective_id')
	->join('weights','objectiveespaces.id','=','weights.objectiveEspace_id')
	->where([['weights.tipo','=',$tipo],['academicplans.id','=',$plan_id]])
	->select('abilities.id as id','abilities.nombre as nombre',DB::raw('SUM(weights.peso) as peso'))
	->groupBy('abilities.id','abilities.nombre')
	->get();
}]);
// Ruta que retorna la información estadistica de las habilidades
Route::get('estadisticaa/{plan_id?}/{area_id?}/{tipo?}',["as"=>"estadisticaa",function($plan_id,$area_id,$tipo){
	return DB::table('academicplans')
	->join('abilities','academicplans.id','=','abilities.academicplan_id')
	->join('objectives','abilities.id','=','objectives.ability_id')
	->join('objectiveespaces','objectives.id','=','objectiveespaces.objective_id')
	->join('academicspaces','objectiveespaces.academicspace_id','=','academicspaces.id')
	->join('knowledgeareas','knowledgeareas.id','=','academicspaces.knowledgearea_id')
	->join('weights','objectiveespaces.id','=','weights.objectiveEspace_id')
	->where([['weights.tipo','=',$tipo],['academicplans.id','=',$plan_id],['knowledgeareas.id','=',$area_id]])
	->select('abilities.id as id','abilities.nombre as nombre',DB::raw('SUM(weights.peso) as peso'))
	->groupBy('abilities.id','abilities.nombre')
	->get();
}]);

//Ruta que da acceso al home de la aplicacion
Route::get('/home', 'HomeController@index');
//
Route::get('prueba',[function(){


	$ac = array(App\knowledgearea::all());
	/*$espacios = array(App\Academicspace::find(3));

	foreach ($espacios as $esp) {
		echo $esp->nombre;
		foreach ($esp->objective as $obj) {
			foreach ($obj->weight as $pe) {
				if($pe->tipo == 1){
				echo $pe->peso;
				}
			}
		}
	}*/

}]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
