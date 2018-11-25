<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log_status_documeto extends Model
{

    protected $fillable=['id', 'users_id', 'documentos_id', 'status_id', 'create_at'];
    public function status(){

        return $this->belongsToMany('App\Status');
    } 
    public function documentos(){

        return $this->belongsToMany('App\Documento');
    }    
    public function users(){

        return $this->belongsToMany('App\User');
    }
}
