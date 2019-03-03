<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Tag_image extends Pivot
{
    protected $table = "image_tag";

    protected $fillable = [
        "image_id", "tag_id"
    ];

}
