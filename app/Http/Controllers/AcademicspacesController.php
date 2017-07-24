<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Academicprogram;
use App\Faculty;
use App\Academicspace;


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
        return view("academicspaces.index",["universidades"=>$universidades]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        $espacio = new Academicspace;
        return view("academicspaces.create",["universidades" => $universidades]);
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
        $espacio->nombre = $request->nombre;
        $espacio->faculty_id = $request->faculty_id;
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
