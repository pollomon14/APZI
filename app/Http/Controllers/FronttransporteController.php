<?php

namespace App\Http\Controllers;
use App\Models\transporte_carga;
use App\Models\transporte_expresos;
use App\Models\transporte_domiciliarios;
use App\Models\transporte_taxis;
use App\Models\iconos;
use App\Models\eventos;
use App\Models\horarios;
use App\Models\municipios;
use Illuminate\Http\Request;

class FronttransporteController extends Controller
{
    public function carga($var)
    {
        $transporte = transporte_carga::where('id_municipio',$var)->get();
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $eventos = eventos::orderBy('id', 'ASC')->get();
        $municipio = municipios::find($var);
        $horarios = horarios::orderBy('id', 'ASC')->get();
        return view('front.carga',compact('transporte','iconos','eventos','municipio','horarios'));

    }
    public function expresos($var)
    {
        $transporte = transporte_expresos::where('id_municipio',$var)->get();
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $eventos = eventos::orderBy('id', 'ASC')->get();
        $municipio = municipios::find($var);
        $horarios = horarios::orderBy('id', 'ASC')->get();
        return view('front.expresos',compact('transporte','iconos','eventos','municipio','horarios'));

    }
    public function domiciliarios($var)
    {
        $transporte = transporte_domiciliarios::where('id_municipio',$var)->get();
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $eventos = eventos::orderBy('id', 'ASC')->get();
        $municipio = municipios::find($var);
        $horarios = horarios::orderBy('id', 'ASC')->get();
        return view('front.domiciliarios',compact('transporte','iconos','eventos','municipio','horarios'));

    }
    public function taxis($var)
    {
        $transporte = transporte_taxis::where('id_municipio',$var)->get();
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $eventos = eventos::orderBy('id', 'ASC')->get();
        $municipio = municipios::find($var);
        $horarios = horarios::orderBy('id', 'ASC')->get();
        return view('front.taxis',compact('transporte','iconos','eventos','municipio','horarios'));

    }

}
