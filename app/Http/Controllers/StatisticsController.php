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
        $ac = new \StdClass();
    $ac->nombre = "AC1";

    $ea1 = new \StdClass();
    $ea1->nombre = "EA1";

    $ea2 = new \StdClass();
    $ea2->nombre = "EA2";


    $h1 = new \StdClass();
    $h1->nombre = "H1";

    $h2 = new \StdClass();
    $h2->nombre = "H2";

    $h3 = new \StdClass();
    $h3->nombre="H3";

    $h4 = new \StdClass();
    $h4->nombre="H4";

    $o1 = new \StdClass();
    $o1->nombre = "Obj1";

    $o2 = new \StdClass();
    $o2->nombre = "Obj2";

    $o3 = new \StdClass();
    $o3->nombre = "Obj3";

    $o4 = new \StdClass();
    $o4->nombre = "Obj4";

    $o5 = new \StdClass();
    $o5->nombre = "Obj5";

    $o6 = new \StdClass();
    $o6->nombre = "Obj6";

    $p1 = new \StdClass();
    $p1->o = $o1;
    $p1->ea = $ea1;
    $p1->valor = 1;

    $p2 = new \StdClass();
    $p2->o = $o2;
    $p2->ea = $ea1;
    $p2->valor = 2;

    $p3 = new \StdClass();
    $p3->o = $o3;
    $p3->ea = $ea1;
    $p3->valor = 3;

    $p4 = new \StdClass();
    $p4->o = $o4;
    $p4->ea = $ea1;
    $p4->valor = 4;

    $p9 = new \StdClass();
    $p9->o = $o5;
    $p9->ea = $ea1;
    $p9->valor = 9;

    $p10 = new \StdClass();
    $p10->o = $o6;
    $p10->ea = $ea1;
    $p10->valor = 6;
    $ea1->lista = array($p1, $p2, $p3, $p4,$p9,$p10);



    $p5 = new \StdClass();
    $p5->o = $o1;
    $p5->ea = $ea2;
    $p5->valor = 5;

    $p6 = new \StdClass();
    $p6->o = $o2;
    $p6->ea = $ea2;
    $p6->valor = 6;

    $p7 = new \StdClass();
    $p7->o = $o3;
    $p7->ea = $ea2;
    $p7->valor = 7;

    $p8 = new \StdClass();
    $p8->o = $o4;
    $p8->ea = $ea2;
    $p8->valor = 8;

    $p11 = new \StdClass();
    $p11->o = $o5;
    $p11->ea = $ea2;
    $p11->valor = 10;

    $p12 = new \StdClass();
    $p12->o = $o5;
    $p12->ea = $ea2;
    $p12->valor = 12;

    $ea2->lista = array($p5, $p6, $p7, $p8,$p11,$p12);



    $h1->listaO = array($o1, $o2);
    $h2->listaO = array($o3, $o4);
    $h3->listaO = array($o5, $o6);
    $ac->listaAE = array($ea1, $ea2);

        $universidades = University::pluck('nombre','id')->toArray();
        return view('stadistics.indexT',["universidades"=>$universidades,'ac'=>array($ac),'h' => array($h1, $h2,$h3)]);
    }
}