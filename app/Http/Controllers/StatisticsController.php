<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use App\Knowledgearea;

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
        return view('stadistics.indexT',["universidades"=>$universidades]);
    }
}