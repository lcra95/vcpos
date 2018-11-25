<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable=['name'];

    public function rols(){

        return $this->belongsToMany('App\Rol');
    }
    public function status(){

        return $this->belongsToMany('App\Status');
    }
}
