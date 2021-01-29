<?php

namespace App\Http\Controllers;
use App\Destacados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DestacadosController extends Controller
{
    public function index(){
        $var = Destacados::latest()->get();
        return view('Destacados.index',[
            'Destacados'=> DB::table('destacados')->paginate(10)
        ]);
    }

    public function store(Request $request)
    {
        

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destacados $var)
    {
        
        $var->delete();
        return back();
    }
}
