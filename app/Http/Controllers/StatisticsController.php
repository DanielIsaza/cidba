<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Knowledgearea;
use App\Ability;
use App\Objective;

class StatisticsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidades = University::pluck('nombre','id')->toArray();
        return view('stadistics.index',["universidades"=>$universidades]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexA()
    {
        $areas = Knowledgearea::pluck('nombre','id')->toArray();
        $universidades = University::pluck('nombre','id')->toArray();
        return view('stadistics.indexA',["universidades"=>$universidades,"areas"=>$areas]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexT()
    {
        $universidades = University::pluck('nombre','id')->toArray();

        $habilidades = \DB::table('abilities')
        ->join('objectives','abilities.id','=','objectives.ability_id')
        ->where('abilities.profile_id','=',1)
        ->select('abilities.id as ability_id','abilities.nombre as ability_nombre','objectives.id as objective_id','objectives.nombre as objective_nombre')
        ->groupBy('abilities.id','abilities.nombre','objectives.id','objectives.nombre')
        ->get();
        dd($habilidades);
        return view('stadistics.indexT',["universidades"=>$universidades,'ac'=>array($ac),'h' => array($h1, $h2,$h3)]);
    }
}