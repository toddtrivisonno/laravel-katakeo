<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenges extends Model
{
    public function content()
    {
        return $this->hasOne('App\Content');
    }

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }
}
