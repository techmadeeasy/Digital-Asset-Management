<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributors extends Model
{
    public function albums(){
        return $this->hasMany("App\Form", "photographer_id");
    }
    public function orders(){
        return $this->hasMany("App\Order", "contributor_id");
    }
}
