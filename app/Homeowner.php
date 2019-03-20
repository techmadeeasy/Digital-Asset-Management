<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homeowner extends Model
{
    public function albums(){
        return $this->hasOne("App/Form");
    }
}
