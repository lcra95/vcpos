<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable=['folio', 'fecha', 'receptors_id', 'empresas_id', 'doc_types_id', 'status_id'];//

    public function receptors(){

        return $this->belongsToMany('App\Receptotr');
    }
    public function empresas(){

        return $this->belongsToMany('App\Empresa');
    }
    public function status(){

        return $this->belongsToMany('App\Status');
    }
    public function doc_types(){

        return $this->belongsToMany('App\Doc_type');
    }
    public function detalle_documetos(){

    	return $this->hasMany('App\Detalle_docuemto');
    }
}
