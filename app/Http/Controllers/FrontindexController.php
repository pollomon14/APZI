<?php

namespace App\Http\Controllers;
use App\Models\eventos;
use App\Models\municipios;
use Illuminate\Http\Request;

class FrontindexController extends Controller
{
    public function info($var)
    {
        $eventos = eventos::where('id_municipio',$var)->get();
        $municipio = municipios::find($var);
        return view('front.index',compact('eventos','municipio'));

    }

    public function mapa($var)
    {
        $municipio = municipios::find($var);
        return view('front.mapa',compact('municipio'));

    }

}
