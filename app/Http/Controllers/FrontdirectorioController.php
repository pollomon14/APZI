<?php

namespace App\Http\Controllers;
use App\Models\directorio;
use App\Models\iconos;
use App\Models\eventos;
use App\Models\municipios;
use Illuminate\Http\Request;

class FrontdirectorioController extends Controller
{
    public function info($var)
    {
        $directorio = directorio::where('id_municipio',$var)->get();
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $eventos = eventos::where('id_municipio',$var)->get();
        $municipio = municipios::find($var);
        return view('front.directorio',compact('directorio','iconos','eventos','municipio'));

    }

}
