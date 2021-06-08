<?php

namespace App\Http\Controllers;

use App\Models\directorio;
use App\Models\iconos;
use App\Models\eventos;
use App\Models\municipios;
use App\Models\subcategorias;
use App\Models\categorias;
use App\Models\horarios;
use App\Models\registro_directorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FrontdirectorioController extends Controller
{
    public function info($var)
    {
        $directorio = directorio::where('id_municipio', $var)->paginate(20);
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $categorias = categorias::orderBy('id', 'ASC')->get();
        $subcategorias = subcategorias::orderBy('id', 'ASC')->get();
        $eventos = eventos::where('id_municipio', $var)->get();
        $municipio = municipios::find($var);
        $destacados = directorio::where([['id_municipio', $var], ['tipo_de_plan', '4']])->orWhere([['id_municipio', $var], ['tipo_de_plan', '3']])->orWhere([['id_municipio', $var], ['tipo_de_plan', '2']])->inRandomOrder()->paginate(20);
        return view('front.directorio', compact('directorio', 'iconos', 'eventos', 'municipio', 'subcategorias', 'destacados', 'categorias'));
    }

    public function local($id, $var)
    {
        $local = directorio::find($id);
        $municipio = municipios::find($var);
        $horarios = horarios::orderBy('id', 'ASC')->get();
        return view('front.destacado', compact('local', 'municipio', 'horarios'));
    }

    public function turismo($var)
    {
        $directorio = directorio::where([['id_municipio', $var], ['tipo_de_plan', '5']])->paginate(5);
        $iconos = iconos::orderBy('id', 'ASC')->get();
        $eventos = eventos::where('id_municipio', $var)->get();
        $municipio = municipios::find($var);
        $horarios = horarios::orderBy('id', 'ASC')->get();
        return view('front.turismo', compact('directorio', 'iconos', 'eventos', 'municipio', 'horarios'));
    }

    public function contador(Request $request)
    {
        //insertar telefono
        $reg = new registro_directorio;
        $reg->id_local = $request->input('id');
        $reg->nombre_local = $request->input('nombre');
        $tipo = $request->input('tipo');

        if ($tipo == 'tel') {
            $reg->telefono_contador = 1;
            $Busqueda = DB::table('registro_directorios')->where('id_local', '=', $request->input('id') )->get();
            if ($Busqueda->isEmpty()) {
                $reg->save();
            } else {
                $cont = $Busqueda[0]->telefono_contador;
                $cont = $cont + 1;
                DB::table('registro_directorios')->where('id_local', '=', $request->input('id'))->update(array(
                    'telefono_contador' => $cont
                ));
            }
            return response()->json([
                "status" => true,
                "data" => $request->input('telefono'),
                "opcion" => 'tel'
            ]);
        } else {
            if ($tipo == 'wp') {
                $reg->whatsapp_contador = 1;
                $Busqueda = DB::table('registro_directorios')->where('id_local', '=', $request->input('id') )->get();
                if ($Busqueda->isEmpty()) {
                    $reg->save();
                } else {
                    $cont = $Busqueda[0]->whatsapp_contador;
                    $cont = $cont + 1;
                    DB::table('registro_directorios')->where('id_local', '=', $request->input('id'))->update(array(
                        'whatsapp_contador' => $cont
                    ));
                }
                return response()->json([
                    "status" => true,
                    "data" => $request->input('telefono'),
                    "opcion" => 'wp'
                ]);
            } else if ($tipo == 'catalogo') {
                $reg->catalogo_contador = 1;
                $Busqueda = DB::table('registro_directorios')->where('id_local', '=', $request->input('id') )->get();
                if ($Busqueda->isEmpty()) {
                    $reg->save();
                } else {
                    $cont = $Busqueda[0]->catalogo_contador;
                    $cont = $cont + 1;
                    DB::table('registro_directorios')->where('id_local', '=', $request->input('id'))->update(array(
                        'telefono_contador' => $cont
                    ));
                }
                return response()->json([
                    "status" => true,
                    "data" => $request->input('telefono'),
                    "opcion" => 'catalogo'
                ]);
            }
            return response()->json([
                "status" => false,
                "data" => "error",
                "opcion" => 'error'
            ]);
        }
    }
}

