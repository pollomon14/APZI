<?php

namespace App\Http\Controllers;
use App\Models\emergencias;
use App\Models\iconos;
use Illuminate\Http\Request;

class FrontemergenciasController extends Controller
{
    public function index()
    {
        $var =1;
        $emergencias = emergencias::where('id_municipio',$var)->get();
        $iconos = iconos::orderBy('id', 'ASC')->get();
        return view('front.emergencias',compact('emergencias','iconos'));

    }

}
