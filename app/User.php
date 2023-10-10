<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    function bicycles() {
        return $this->hasMany("App\Bicycle");
    }

    function country() {
        return $this->belongsTo("App\Country");
    }

    protected $fillable = [
        "country_id",
        "first_name",
        "last_name",
        "birth_date"

    ];
}
