<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    public function rutaExpediente()
    {
        return $this->hasMany('App\RutaExpediente','IdExpediente');
    }
}
