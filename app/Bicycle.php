<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicycle extends Model
{
    function user() {
        return $this->belongsTo("App\User");
    }

    protected $fillable = [
        "brand",
        "model",
        "color",
        "price",
        "user_id"
    ];
}
