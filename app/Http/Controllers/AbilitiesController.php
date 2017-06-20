<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ability;
use App\Typeability;

class AbilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habilidades = Ability::all();
        return view("abilities.index",["habilidades"=>$habilidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposh = Typeability::pluck('nombre','id');
        $habilidad = new Ability;
        return view("abilities.create",["habilidad"=> $habilidad,"tiposh" => $tiposh]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habilidad = new Ability;
        $habilidad->nombre = $request->nombre;
        $habilidad->typeability_id = $request->typeability_id;
        if($habilidad->save()){
            return redirect("/habilidades");
        }else{
            return view("abilities.create");
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
        $habilidad = Ability::find($id);
        $tiposh = Typeability::pluck('nombre','id');
        return view("abilities.edit",["habilidad"=> $habilidad,"tiposh"=>$tiposh]);
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
        $habilidad = Ability::find($id);
        $habilidad->nombre = $request->nombre;
        $habilidad->typeability_id = $request->typeability_id;
        if($habilidad->save()){
            return redirect("/habilidades");
        }else{
            return view("abilities.edit",["habilidad" => $habilidad]);
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
        Ability::destroy($id);
        return redirect('/habilidades');
    }
}
