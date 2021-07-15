<?php

namespace App\Http\Controllers;

use App\Models\directorio;
use App\Models\iconos;
use App\Models\eventos;
use App\Models\municipios;
use App\Models\subcategorias;
use App\Models\categorias;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontbusquedaController extends Controller
{

    public function categorias(Request $request){
        $var = $request->input('categorias');
        $ciudad = $request->input('municipio');
        if ($var=="Todos"){
            $directorio = directorio::where([['id_municipio',$ciudad]])->get();
            $var=null;
        }else{
            $directorio = directorio::where([['id_municipio',$ciudad],['id_categoria',$var]])->get();

        }
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $categorias = categorias::orderBy('id', 'ASC')->get();
        $subcategorias = subcategorias::orderBy('id', 'ASC')->get();
        $eventos = eventos::where('id_municipio',$ciudad)->get();
        $municipio = municipios::find($ciudad);
        $destacados = directorio::where([['id_municipio',$ciudad],['tipo_de_plan','4']])->orWhere([['id_municipio',$ciudad],['tipo_de_plan','3']])->orWhere([['id_municipio',$ciudad],['tipo_de_plan','2']])->inRandomOrder()->paginate(20);
        return view('front.directorio',compact('directorio','iconos','eventos','municipio','subcategorias','destacados','categorias', 'var'));

    }



    public function search(Request $request)
    {

        $var = $request->input('busqueda');
        $ciudad = $request->input('municipio');

        //insertar palabra
        $Busqueda=DB::table('palabra_mas_buscada')->where('palabra','LIKE','%'.$var.'%')->get();
        if($Busqueda->isEmpty()){
            DB::table('palabra_mas_buscada')->insert([
                'palabra' => $var,
                'contador' => 1
            ]);
        }
        else{
            $cont=$Busqueda[0]->contador;
            $cont=$cont+1;
            DB::table('palabra_mas_buscada')->where('palabra','LIKE','%'.$var.'%')->update(array(
                'contador'=>$cont));
        }



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
