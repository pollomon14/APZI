<?php

namespace App\Http\Controllers;
use App\Models\emergencias;
use App\Models\iconos;
use App\Models\eventos;
use App\Models\municipios;
use Illuminate\Http\Request;

class FrontemergenciasController extends Controller
{
    public function index($var)
    {
        $emergencias = emergencias::where('id_municipio',$var)->get();
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $eventos = eventos::orderBy('id', 'ASC')->get();
        $municipio = municipios::find($var);
        return view('front.emergencias',compact('emergencias','iconos','eventos','municipio'));

    }

}
