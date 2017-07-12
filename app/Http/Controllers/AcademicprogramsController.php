<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academicprogram;
use App\Faculty;
use App\University;

class AcademicprogramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        $programas  = array();
        return view("academicprograms.index",["programas"=>$programas, "universidades"=>$universidades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        $programa = new Academicprogram;
        return view("academicprograms.create",["programa"=> $programa,"universidades" => $universidades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $programa = new Academicprogram;
        $programa->nombre = $request->nombre;
        $programa->faculty_id = $request->faculty_id;
        if($programa->save()){
            return redirect("/programasacademicos");
        }else{
            return view("academicprograms.create");
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
        $programa = Academicprogram::find($id);
        $facultades = Faculty::pluck('nombre','id');
        return view("academicprograms.edit",["programa"=> $programa,"facultades"=>$facultades]);
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
        $programa = Academicprogram::find($id);
        $programa->nombre = $request->nombre;
        $programa->faculty_id = $request->faculty_id;
        if($programa->save()){
            return redirect("/programasacademicos");
        }else{
            return view("academicprograms.edit",["programa" => $programa]);
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
        Academicprogram::destroy($id);
        return redirect('/programasacademicos');
    }
}
