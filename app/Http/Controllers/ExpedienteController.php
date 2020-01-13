<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\DB;
use App\Expediente;
use App\Http\Resources\Expediente as ExpedienteResource;
class ExpedienteController extends Controller
{

    public function show ($id)
    {   
        $expedientes = DB::table('expediente')->where('IdExpediente',$id)->get();
        $rutas = DB::table('rutaexpediente')->where('IdExpediente',$id)->get();
        $expedientes[0]->{'rutas'} = $rutas;
        return new ExpedienteResource($expedientes);
    }
    public function index(){
        $expedientes = DB::table('expediente')->get();
        return new ExpedienteResource($expedientes);
    }
}
