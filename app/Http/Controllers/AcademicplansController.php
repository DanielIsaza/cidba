<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academicplan;
use App\Academicprogram;
use App\Faculty;
use App\University;
use App\State;


class AcademicplansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        return view("academicplans.index",["universidades"=>$universidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        $estados = State::pluck('nombre','id')->toArray();
        return view("academicplans.create",["universidades" => $universidades,"estados"=>$estados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plan = new Academicplan;
        $plan->nombre = $request->nombre;
        $plan->academicprogram_id = $request->academicprogram_id;
        $plan->perfil = $request->descripcion;
        $plan->state_id = $request->state_id;
        if($plan->save()){
            \Alert::message('Plan académico creado correctamente', 'success');
            return redirect("/planesacademicos");
        }else{
            \Alert::message('Ocurrio un error, intente nuevamente', 'danger');
            return view("academicplans.create");
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
        $estados = State::pluck('nombre','id')->toArray();
        $programas = Academicprogram::pluck('nombre','id')->toArray();
        $plan = Academicplan::find($id);   
        $idfacultad = \DB::table('academicprograms')
                     ->join('faculties','faculties.id','=','academicprograms.faculty_id')
                     ->where('academicprograms.faculty_id',$plan->academicprogram_id)
                     ->select('faculty_id as id')->get();
        return view("academicplans.edit",["plan"=> $plan,"universidades"=>$universidades,"facultades"=>$facultades,"estados"=>$estados,"programas"=>$programas,"idfacultad"=>$idfacultad[0]->id]);
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
        $plan = Academicplan::find($id);
        $plan->nombre = $request->nombre;
        $plan->academicprogram_id = $request->academicprogram_id;
        $plan->perfil = $request->descripcion;
        $plan->state_id = $request->state_id;

        if($plan->save() ){
            \Alert::message('Plan académico actualizado correctamente', 'success');
            return redirect("/planesacademicos");
        }else{
            \Alert::message('Ocurrio un error, intente nuevamente', 'danger');
            return view("academicplans.edit",["plan" => $plan]);
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
        $habilidades = Academicplan::find($id)->abilities;
        if(count($habilidades) == 0){
            Academicplan::destroy($id);
            \Alert::message('Plan académico eliminado correctamente', 'success');
            return redirect('/planesacademicos');
        }else{
            \Alert::message('No sé puede eliminar el plan académico', 'danger');
            return redirect('/planesacademicos');
        }
    }
}
