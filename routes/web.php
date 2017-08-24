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
	Route::get('/', 'MainController@home');

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
	->where([['abilities.id','=',$ability_id],['weights.tipo','=','0']])->select('objectiveespaces.id as value','academicspaces.nombre as text','weights.peso','objectives.nombre as objetivos','objectives.peso as pesohabilidad')->get();
}]);
// Ruta que retorna la información estadistica de las habilidades
Route::get('estadisticah/{plan_id?}/{tipo?}',["as"=>"estadisticah",function($plan_id,$tipo){
	return DB::table('academicplans')
	->join('profiles','academicplans.id','=','profiles.academicplan_id')
	->join('abilities','profiles.id','=','abilities.profile_id')
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
	->join('profiles','academicplans.id','=','profiles.academicplan_id')
	->join('abilities','profiles.id','=','abilities.profile_id')
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
//habilidades y objetivos
Route::get('habilidadesobjetivos/{plan_id?}',["as"=>"habilidadesobjetivos",function($plan_id){
	return DB::select("select `abilities`.`id` as habilidad_id, `abilities`.`nombre` as habilidad_nombre, `objectives`.`id` as objetivo_id, `objectives`.`nombre` as objetivo_nombre from `academicplans` inner join `profiles` on `academicplans`.`id` = `profiles`.`academicplan_id` inner join `abilities` on `profiles`.`id` = `abilities`.`profile_id` inner join `objectives` on `abilities`.`id` = `objectives`.`ability_id` where `academicplans`.`id` = 1 group by `abilities`.`id`, `abilities`.`nombre`, `objectives`.`id`, `objectives`.`nombre`");

	/*return DB::table('academicplans')
	->join('profiles','academicplans.id','=','profiles.academicplan_id')
	->join('abilities','profiles.id','=','abilities.profile_id')
	->join('objectives','abilities.id','=','objectives.ability_id')
	->where('academicplans.id','=',$plan_id)
	->select('abilities.id','abilities.ombre','objectives.id','objectives.nombre')
	->groupBy('abilities.id','abilities.nombre','objectives.id','objectives.nombre')
	->get();*/
}]);
//Ruta que da acceso al home de la aplicacion
Route::get('/home', 'HomeController@index');
//
Route::get('/pru', function () {
    $ac = new StdClass();
    $ac->nombre = "AC1";

    $ea1 = new StdClass();
    $ea1->nombre = "EA1";

    $ea2 = new StdClass();
    $ea2->nombre = "EA2";


    $h1 = new StdClass();
    $h1->nombre = "H1";

    $h2 = new StdClass();
    $h2->nombre = "H2";

    $o1 = new StdClass();
    $o1->nombre = "Obj1";

    $o2 = new StdClass();
    $o2->nombre = "Obj2";

    $o3 = new StdClass();
    $o3->nombre = "Obj3";

    $o4 = new StdClass();
    $o4->nombre = "Obj4";

    $p1 = new StdClass();
    $p1->o = $o1;
    $p1->ea = $ea1;
    $p1->valor = 1;

    $p2 = new StdClass();
    $p2->o = $o2;
    $p2->ea = $ea1;
    $p2->valor = 2;

    $p3 = new StdClass();
    $p3->o = $o3;
    $p3->ea = $ea1;
    $p3->valor = 3;

    $p4 = new StdClass();
    $p4->o = $o4;
    $p4->ea = $ea1;
    $p4->valor = 4;

    $ea1->lista = array($p1, $p2, $p3, $p4);



    $p5 = new StdClass();
    $p5->o = $o1;
    $p5->ea = $ea2;
    $p5->valor = 5;

    $p6 = new StdClass();
    $p6->o = $o2;
    $p6->ea = $ea2;
    $p6->valor = 6;

    $p7 = new StdClass();
    $p7->o = $o3;
    $p7->ea = $ea2;
    $p7->valor = 7;

    $p8 = new StdClass();
    $p8->o = $o4;
    $p8->ea = $ea2;
    $p8->valor = 8;

    $ea2->lista = array($p5, $p6, $p7, $p8);



    $h1->listaO = array($o1, $o2);
    $h2->listaO = array($o3, $o4);
    $ac->listaAE = array($ea1, $ea2);

    return view('pru')->with('ac', array($ac))->with('h', array($h1, $h2));
});

	
});