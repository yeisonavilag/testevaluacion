<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Provincia;
use App\Models\Comuna;

class HomeController extends Controller
{
    public function index(){
        $regiones = Region::all();
        return view('home', compact("regiones"));
    }

    public function provincias (Request $request){
        if(isset($request->texto)){
            $provincias = Provincia::whereregion_id($request->texto)->get();
            return response()->json([
                    'lista' => $provincias,
                    'success' => true
                ]);
        }else{
            return response()->json([
                    'success' => false
                ]);
        }
    }

    public function comunas (Request $request){
        if(isset($request->texto)){
            $comunas = Comuna::whereprovincia_id($request->texto)->get();
            return response()->json([
                    'lista' => $comunas,
                    'success' => true
                ]);
        }else{
            return response()->json([
                    'success' => false
                ]);
        }
    }




}
