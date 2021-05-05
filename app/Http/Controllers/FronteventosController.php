<?php

namespace App\Http\Controllers;
use App\Models\eventos;
use App\Models\iconos;
use App\Models\municipios;
use Illuminate\Http\Request;

class FronteventosController extends Controller
{
    public function index($var)
    {
        $eventos = eventos::where('id_municipio',$var)->get();
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $municipio = municipios::find($var);
        return view('front.ofertas',compact('eventos','iconos','municipio'));

    }

}
