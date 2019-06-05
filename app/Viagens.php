<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagens extends Model
{
    public function caminhoneiro(){
        return $this->hasOne('App\Caminhoneiro');
    }
    public function origem(){
        return $this->hasOne('App\Locais');
    }
    public function destino(){
        return $this->hasOne('App\Locais');
    }
}
