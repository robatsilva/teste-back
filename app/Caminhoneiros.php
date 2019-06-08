<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caminhoneiros extends Model
{
    public function viagens(){
        return $this->hasMany('App\Viagens');
    }

    public function origem(){
        return $this->belongsTo('App\Locais');
    }
    public function destino(){
        return $this->belongsTo('App\Locais');
    }
    
    public function tipo_caminhao(){
        return $this->belongsTo('App\TiposCaminhoes');
    }
}
