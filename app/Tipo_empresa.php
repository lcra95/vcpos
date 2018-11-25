<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo_empresa extends Model
{
    protected $fillable=['name'];    //
    
    public function empresas(){

    	return $this->hasMany('App\Empresa');
    }
}
