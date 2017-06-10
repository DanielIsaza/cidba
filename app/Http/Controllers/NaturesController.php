<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nature;

class NaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $natures = Nature::all();
        return view("natures.index",["natures"=>$natures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nature = new Nature;
        return view("natures.create",["nature"=> $nature]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nature = new Nature;
        $nature->nombre = $request->nombre;

        if($nature->save()){
            return redirect("/naturaleza");
        }else{
            return view("natures.create");
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
        $nature = Nature::find($id);
        return view("natures.edit",["nature"=> $nature]);
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
        $nature = Nature::find($id);
        $nature->nombre = $request->nombre;

        if($nature->save()){
            return redirect("/naturaleza");
        }else{
            return view("natures.edit",["nature" => $nature]);
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
        Nature::destroy($id);
        return redirect('/naturaleza');
    }
}
