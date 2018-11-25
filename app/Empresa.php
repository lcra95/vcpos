<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable=['rut', 
                         'razonsocial',
                         'direccion',
                         'responsable',
                         'rut_responsable',
                         'telefono',
                         'mail',
                         'cod_sii',
                         'resolusion',
                         'fecha_resolucion',
                         'ateco',
                         'comunas_id',
                         'tipo_empresas_id',
                         'status_id'];
    public function comunas(){

        return $this->belongsToMany('App\Comuna');
    }
    public function tipo_empresa(){

        return $this->belongsToMany('App\Tipo_empresa');
    }
    public function status(){

        return $this->belongsToMany('App\Status');
    } 
    public function cod_caf(){

    	return $this->hasMany('App\Cod_caf');
    }
    public function documetos(){

    	return $this->hasMany('App\Documento');
    }
    public function users(){

    	return $this->hasMany('App\User');
    }
}
