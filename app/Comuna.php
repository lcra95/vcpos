<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $fillable=['name', 'regions_id'];//

    public function regions(){

        return $this->belongsToMany('App\Region');
    }    
}    
