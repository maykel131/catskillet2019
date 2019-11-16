<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Medico;

class MedicoApiController extends Controller
{
    public function index(){
        $medico = Medico::all();
        return response()->json( $medico);
    }

    public function show($id)
    {
       $medico= Medico::find($id);
       return response()->json( $medico);
    }
}
