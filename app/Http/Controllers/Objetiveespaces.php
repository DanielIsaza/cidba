<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typeability;
use App\University;
use App\Faculty;

class Objetiveespaces extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoHabilidades = Typeability::pluck('nombre','id')->toArray();
        return view("objetives.index",["tipoHabilidades"=>$tipoHabilidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        return view("objetives.create",["universidades" => $universidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $facultad = new Faculty;
        $facultad->nombre = $request->nombre;
        $facultad->university_id = $request->university_id;
        if($facultad->save()){
            return redirect("/facultades");
        }else{
            return view("objetives.create");
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
        $facultad = Faculty::find($id);
        $universidades = University::pluck('nombre','id');
        return view("objetives.edit",["facultad"=> $facultad,"universidades"=>$universidades]);
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
        $facultad = Faculty::find($id);
        $facultad->nombre = $request->nombre;
        $facultad->university_id = $request->university_id;
        if($facultad->save()){
            return redirect("/facultades");
        }else{
            return view("objetives.edit",["facultad" => $facultad]);
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
        Faculty::destroy($id);
        return redirect('/facultades');
    }
}
