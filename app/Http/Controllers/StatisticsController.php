<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;

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
}
