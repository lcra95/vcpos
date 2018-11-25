<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc_type extends Model
{
    protected $fillable=['name','status_id']; //
    public function status(){

        return $this->belongsToMany('App\Status');
    }
    public function cod_caf(){

    	return $this->hasMany('App\Cod_caf');
    }
    public function documentos(){

    	return $this->hasMany('App\Documento');
    }
}
