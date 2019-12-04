<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public function challenge()
    {
        return $this->hasMany('App\Challenges');
    }
}
