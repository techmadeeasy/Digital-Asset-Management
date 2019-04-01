<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function contributors(){
        return $this->belongsTo("App\Contributors", "contributor_id");
    }
}
