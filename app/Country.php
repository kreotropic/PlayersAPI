<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    function users() {
        return $this->hasMany("App\User");
    }

    protected $fillable = [
        "name",

    ];
}
