<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receptor extends Model
{
    protected $fillable=['rut', 
    'razonsocial',
    'direccion',
    'responsable',
    'rut_responsable',
    'telefono',
    'mail',
    //'cod_sii',
    //'resolusion',
    //'fecha_resolucion',
    //'ateco',
    'comunas_id'];
    public function comunas(){

        return $this->belongsToMany('App\Comuna');
    }
   
    public function documetos(){

        return $this->hasMany('App\Documento');
    }
   
}
