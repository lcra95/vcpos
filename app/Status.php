<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable=['name'];

    public function log_status_documetos(){

    	return $this->hasMany('App\Log_status_documento');
    }
    public function users(){

    	return $this->hasMany('App\User');
    }
    public function menu(){

    	return $this->hasMany('App\Menu');
    }
    
    public function doc_types(){

    	return $this->hasMany('App\Doc_type');
    }
    
    public function documetos(){

    	return $this->hasMany('App\Documento');
    }
    
    public function cod_caf(){

    	return $this->hasMany('App\Cod_caf');
    }
    public function empresas(){

    	return $this->hasMany('App\Empresa');
    }
    
}
