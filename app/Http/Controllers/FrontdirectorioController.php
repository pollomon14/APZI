<?php

namespace App\Http\Controllers;
use App\Models\directorio;
use App\Models\iconos;
use App\Models\eventos;
use App\Models\municipios;
use App\Models\subcategorias;
use App\Models\categorias;
use App\Models\horarios;
use Illuminate\Http\Request;

class FrontdirectorioController extends Controller
{
    public function info($var)
    {
        $directorio = directorio::where('id_municipio',$var)->paginate(20);
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $categorias = categorias::orderBy('id', 'ASC')->get();
        $subcategorias = subcategorias::orderBy('id', 'ASC')->get();
        $eventos = eventos::where('id_municipio',$var)->get();
        $municipio = municipios::find($var);
        $destacados = directorio::where([['id_municipio',$var],['tipo_de_plan','4']])->orWhere([['id_municipio',$var],['tipo_de_plan','3']])->orWhere([['id_municipio',$var],['tipo_de_plan','2']])->inRandomOrder()->paginate(20);
        return view('front.directorio',compact('directorio','iconos','eventos','municipio','subcategorias','destacados','categorias'));

    }

    public function local($id,$var)
    {
        $local = directorio::find($id);
        $municipio = municipios::find($var);
        $horarios = horarios::orderBy('id', 'ASC')->get();
        return view('front.destacado',compact('local','municipio','horarios'));

    }

    public function turismo($var)
    {
        $directorio = directorio::where([['id_municipio',$var],['tipo_de_plan','5']])->paginate(5);
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $eventos = eventos::where('id_municipio',$var)->get();
        $municipio = municipios::find($var);
        $horarios = horarios::orderBy('id', 'ASC')->get();
        return view('front.turismo',compact('directorio','iconos','eventos','municipio','horarios'));

    }


}
