<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_documento extends Model
{
    protected $fillable=['descripcion','cantidad','monto','iva','exento','descuento','recargo','total','documentos_id','iva_id'];//
    public function documentos(){

        return $this->belongsToMany('App\Documento');
    }
    public function iva(){

        return $this->belongsToMany('App\Iva');
    }
}
