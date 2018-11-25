<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iva extends Model
{
    protected $fillable=['valor'];    //

    public function detalle_documentos(){

    	return $this->hasMany('App\Detalle_documento');
    }
}
