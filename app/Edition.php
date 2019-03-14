<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    protected $table= "editions";

    public function album(){
        return $this->hasMany('App\Form');
    }
    public function year(){
        return $this->belongsTo('App\Year');
    }   
}
