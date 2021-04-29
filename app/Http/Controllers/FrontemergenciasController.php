<?php

namespace App\Http\Controllers;
use App\Models\emergencias;
use Illuminate\Http\Request;

class FrontemergenciasController extends Controller
{
    public function index()
    {

        $emergencias = emergencias::orderBy('id', 'ASC')->get();
        return view('front.emergencias',compact('emergencias'));

    }

}
