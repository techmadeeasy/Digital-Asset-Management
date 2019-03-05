<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $fillable = [
        "name", "cat_id"
    ];
    public function image(){
        return $this->belongsToMany("App\Image");
    }
}
