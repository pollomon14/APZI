<?php

namespace App\Http\Controllers;
use App\Models\eventos;
use App\Models\municipios;
use App\Models\iconos;
use Illuminate\Http\Request;

class FrontindexController extends Controller
{
    public function info($var)
    {
        $eventos = eventos::where([['id_municipio','like', '%' . $var . '%'], ['tipo', '5']])->orwhere([['id_municipio','like', '%' . $var . '%'], ['tipo', '1']])->orwhere([['id_municipio','like', '%' . $var . '%'], ['tipo', '2']])->get();
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $municipio = municipios::find($var);
        return view('front.index',compact('eventos','municipio','iconos'));

    }

    public function mapa($var)
    {
        $municipio = municipios::find($var);
        return view('front.mapa',compact('municipio'));

    }

}
