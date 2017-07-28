<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academicprogram;
use App\Academicplan;
use App\Profile;
use App\Ability;    
use App\Objective;
use App\Typeability;
use App\University;
use App\Faculty;
use App\ObjectiveEspace;
use App\Weight;

class ObjectivespacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        $tipoHabilidades = Typeability::pluck('nombre','id')->toArray();
        return view("objectivess.index",["universidades"=>$universidades,"tipoHabilidades"=>$tipoHabilidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        return view("objectivess.create",["universidades" => $universidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $espaciobjetivo = new ObjectiveEspace;
        $peso = new Weight;

        $espaciobjetivo->academicspace_id = $request->academicspace_id;
        $espaciobjetivo->objective_id = $request->objective_id;

        if($espaciobjetivo->save()){
            $peso->tipo = 1;
            $peso->peso = $request->peso;
            $peso->ability_id = $request->ability_id;
            $peso->objectiveEspace_id = ObjectiveEspace::all('id')->max()->select('id')->get()[0]->id;
            if($peso->save()){
                return redirect("/asignacion");
            }
        }else{
            return view("objectivess.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $objetivo = Objective::find($id);
        $universidades = University::pluck('nombre','id')->toArray();
        $facultades = Faculty::pluck('nombre','id')->toArray();
        $programas = Academicprogram::pluck('nombre','id')->toArray();
        $planes = Academicplan::pluck('nombre','id')->toArray();
        $perfiles = Profile::pluck('nombre','id')->toArray();
        $habilidades = Ability::pluck('nombre','id')->toArray();

        $idPerfil = Profile::where('id',$objetivo->ability_id)->select('id','academicplan_id')->get()[0];
        $idPlan = Academicplan::where('id',$idPerfil->academicplan_id)->select('id','academicprogram_id')->get()[0];
        $idPrograma = Academicprogram::where('id',$idPlan->academicprogram_id)->select('id','faculty_id')->get()[0];
        $idFacultad = Faculty::where('id',$idPrograma->faculty_id)->select('id','university_id')->get()[0];

        return view("objetives.edit",["universidades"=>$universidades,"facultades"=>$facultades,"programas"=>$programas,"planes"=>$planes,"perfiles"=>$perfiles,"habilidades"=>$habilidades,"objetivo"=>$objetivo,"idHabilidad"=>$objetivo->ability_id,"idPerfil"=>$idPerfil->id,"idPlan"=>$idPlan->id,"idPrograma"=>$idPrograma->id,"idFacultad"=>$idFacultad->id,"idUniversidad"=>$idFacultad->university_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $objetivo = Objective::find($id);
        $objetivo->nombre = $request->nombre;
        $objetivo->peso = $request->peso;
        $objetivo->ability_id = $request->ability_id;
       
        if($objetivo->save()){
            return redirect("/objetivos");
        }else{
            return view("objetives.edit",["objetivo" => $objetivo]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Objective::destroy($id);
        return redirect('/objetivos');
    }
}
