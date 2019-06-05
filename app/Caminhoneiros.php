<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caminhoneiros extends Model
{
    public function viagens(){
        return $this->hasMany('App\Viagens');
    }

    public function local(){
        return $this->hasOne('App\Locais');
    }
    
    public function tipo_caminhao(){
        return $this->hasOne('App\TiposCaminhoes');
    }
}
