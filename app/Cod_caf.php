<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cod_caf extends Model
{
    protected $fillable=['name','xml','empresas_id','doc_types_id','status_id'];
    public function status(){

        return $this->belongsToMany('App\Status');
    }
    public function empresas(){

        return $this->belongsToMany('App\Empresa');
    }
    public function doc_types(){

        return $this->belongsToMany('App\Doc_type');
    }
}
