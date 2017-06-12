<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\University;

class FacultiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facultades = Faculty::all();
        return view("faculties.index",["facultades"=>$facultades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universidades = University::pluck('nombre','id');
        $facultad = new Faculty;
        return view("faculties.create",["facultad"=> $facultad,"universidades" => $universidades]);
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
            return view("faculties.create");
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
        return view("faculties.edit",["facultad"=> $facultad,"universidades"=>$universidades]);
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
            return view("faculties.edit",["facultad" => $facultad]);
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