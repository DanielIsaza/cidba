<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typeability;

class TypeabilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposHabilidades = Typeability::all();
        return view("Typeabilities.index",["tiposHabilidades"=>$tiposHabilidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoHabilidad = new Typeability;
        return view("typeabilities.create",["tipoHabilidad" => $tipoHabilidad]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoHabilidad = new Typeability;
        $tipoHabilidad->nombre = $request->nombre;

        if($tipoHabilidad->save()){
            return redirect('/tiposhabilidad');
        }else{
            return view("typeabilities.create");
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
        $tiposhabilidad = Typeability::find($id);
        return view("typeabilities.edit",["tiposhabilidad"=>$tiposhabilidad]);
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
        $tiposhabilidad = Typeability::find($id);
        $tiposhabilidad->nombre = $request->nombre;

        if($tiposhabilidad->save()){
            return redirect('/tiposhabilidad');
        }else{
            return view("typeabilities.edit",["tiposhabilidad"=>$tiposhabilidad]);  
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
        Typeability::destroy($id);
        return redirect('/tiposhabilidad');
    }
}
