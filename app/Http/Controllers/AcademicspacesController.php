<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Academicprogram;
use App\Faculty;
use App\Academicspace;
use App\Typeevaluation;
use App\Typemethodology;
use App\Activityacademic;
use App\Nature;
use App\Semester;

class AcademicspacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        $semestres = Semester::pluck('nombre','id')->toArray();
        return view("academicspaces.index",["universidades"=>$universidades,"semestres"=>$semestres]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        $tipoEvaluaciones = Typeevaluation::pluck('nombre','id')->toArray();
        $tipoMetodologias = Typemethodology::pluck('nombre','id')->toArray();
        $actividadesAca = Activityacademic::pluck('nombre','id')->toArray();
        $naturalezas = Nature::pluck('nombre','id')->toArray();
        $semestres = Semester::pluck('nombre','id')->toArray();

        return view("academicspaces.create",["universidades"=>$universidades,"tipoEvaluaciones"=>$tipoEvaluaciones,"tipoMetodologias"=>$tipoMetodologias,"actividadesAca"=>$actividadesAca,"naturalezas"=>$naturalezas,"semestres"=>$semestres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $espacio = new Academicspace;
        $espacio->codigo = $request->codigo;
        $espacio->nombre = $request->nombre;
        $espacio->numeroCreditos = $request->numeroCreditos;
        $espacio->horasTeoricas = $request->horasTeoricas;
        $espacio->horasPracticas = $request->horasPracticas;
        $espacio->horasTeoPract = $request->horasTeoPract;
        $espacio->horasAsesorias = $request->horasAsesorias;
        $espacio->horasIndependiente = $request->horasIndependiente;
        $espacio->habilitable = $request->habilitable;
        $espacio->validable = $request->validable;
        $espacio->homologable = $request->homologable;
        $espacio->nucleoTematico = $request->nucleoTematico;
        $espacio->justificacion = $request->justificacion;
        $espacio->metodologia = $request->metodologia;
        $espacio->evaluacion = $request->evaluacion;
        $espacio->descripcion = $request->descripcion;
        $espacio->contenidoConceptual = $request->contenidoConceptual;
        $espacio->contenidoProcedimental  = $request->contenidoProcedimental;
        $espacio->contenidoActitudinal = $request->contenidoActitudinal;
        $espacio->procesosIntegrativos = $request->procesosIntegrativos;
        $espacio->unidades = $request->unidades;

        $espacio->academicplan_id = $request->academicplan_id;
        $espacio->semester_id = $request->semester_id;
        $espacio->activityacademic_id = $request->activityacademic_id;
        $espacio->typeevaluation_id = $request->typeevaluation_id;
        $espacio->typemethodology_id = $request->typemethodology_id;
        $espacio->nature_id = $request->nature_id;

        if($espacio->save()){
            return redirect("/espaciosacademicos");
        }else{
            return view("academicspaces.create");
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
        $universidades = University::pluck('nombre','id')->toArray();
        $facultades = Faculty::pluck('nombre','id')->toArray();
        $espacio = Academicspace::find($id);   
        return view("academicspaces.edit",["espacio"=> $espacio,"universidades"=>$universidades,"facultades"=>$facultades]);
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
        $espacio = Academicspace::find($id);
        $espacio->nombre = $request->nombre;
        $espacio->faculty_id = $request->faculty_id;
        if($espacio->save()){
            return redirect("/espaciosacademicos");
        }else{
            return view("academicspaces.edit",["espacio" => $espacio]);
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
        Academicspace::destroy($id);
        return redirect('/espaciosacademicos');
    }
}
