<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Rol;
use App\Academicprogram;
use App\Authorize;

class AutorizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::pluck('name','id')->toArray();
        $roles = Rol::pluck('nombre','id')->toArray();
        $programas = Academicprogram::pluck('nombre','id')->toArray();

        
        return view("autorizes.index",["usuarios"=>$usuarios,"roles"=>$roles,"programas"=>$programas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autoriza = new Authorize;
        $autoriza->user_id = $request->user_id;
        $autoriza->rol_id = $request->rol_id;
        $autoriza->academicprogram_id = $request->academicprogram_id;
        if($autoriza->save()){
            \Alert::message('Permiso asignado correctamente', 'success');
            return redirect("/autoriza");
        }else{
            \Alert::message('Ocurrio un error, intente nuevamente', 'danger');
            return view("autorizes.index");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
