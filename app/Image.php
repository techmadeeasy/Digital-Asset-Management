<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Image extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table="image";
    protected $foreignKey = "album_id";


    public function tags(){
        return $this->belongsToMany("App\Tag")->withPivot("image_tag");
    }
}


