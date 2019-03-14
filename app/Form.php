<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Form extends Model
{
    use SoftDeletes;
    protected $table = "album";
    protected $dates = ['deleted_at'];
    

    public function images(){

        return $this->hasMany("App\Image", "album_id");
    }
    public function editions(){
        return $this->belongsTo("App\Edition", "edition_id");
    }
}
