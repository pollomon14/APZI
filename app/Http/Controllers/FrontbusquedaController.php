<?php

namespace App\Http\Controllers;

use App\Models\iconos;
use App\Models\eventos;
use App\Models\municipios;
use App\Models\subcategorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontbusquedaController extends Controller
{
    public function search(Request $request)
    {

        $var = $request->input('busqueda');
        $ciudad = $request->input('municipio');

        //Buscador directorio
        $directorios=DB::table('directorios')->where('id_municipio',$ciudad)
        ->where('nombre','LIKE','%'.$var.'%')
        ->orwhere('descripcion','LIKE','%'.$var.'%')
        ->orwhere('palabras_clave','LIKE','%'.$var.'%')->get();

        //Buscador emergencias
        $emergencias=DB::table('emergencias')->where('id_municipio',$ciudad)
        ->orwhere('nombre','LIKE','%'.$var.'%')
        ->orwhere('direccion','LIKE','%'.$var.'%')->get();

        //Buscador Transporte_cargas
        $transporte_cargas=DB::table('transporte_cargas')->where('id_municipio',$ciudad)
        ->orwhere('nombre','LIKE','%'.$var.'%')
        ->orwhere('capacidad','LIKE','%'.$var.'%')
        ->orwhere('carroceria','LIKE','%'.$var.'%')->get();

        //Buscador Transporte_domiciliarios
        $transporte_domiciliarios=DB::table('transporte_domiciliarios')->where('id_municipio',$ciudad)
        ->orwhere('nombre','LIKE','%'.$var.'%')
        ->orwhere('tipo_vehiculo','LIKE','%'.$var.'%')->get();

         //Buscador Transporte_expresos
         $transporte_expresos=DB::table('transporte_expresos')->where('id_municipio',$ciudad)
         ->orwhere('nombre','LIKE','%'.$var.'%')
         ->orwhere('capacidad','LIKE','%'.$var.'%')
        ->orwhere('carroceria','LIKE','%'.$var.'%')->get();

         //Buscador Transporte_taxes
         $transporte_taxes=DB::table('transporte_taxes')->where('id_municipio',$ciudad)
         ->orwhere('nombre','LIKE','%'.$var.'%')
        ->orwhere('placa','LIKE','%'.$var.'%')->get();

        $municipio = municipios::find($ciudad);
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $subcategorias = subcategorias::orderBy('id', 'ASC')->get();
        $eventos = eventos::where('id_municipio',$ciudad)->get();

        return view('/front/busquedas',compact('directorios','emergencias','transporte_cargas',
        'transporte_domiciliarios','transporte_expresos','transporte_taxes','iconos','eventos','municipio','subcategorias'));
    }

}