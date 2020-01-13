<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
class Expediente extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    // public function with($request)
    // {
    //     $rutas = DB::table('rutaexpediente')->where('IdExpediente',$this[0]->IdExpediente)->get();
    //     return [
    //         'extra' => [
    //             'rutas' => $rutas
    //         ],
    //     ];
    // }
}
