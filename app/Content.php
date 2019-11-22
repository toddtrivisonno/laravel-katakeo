<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    public function challenge() {
        return $this->belongsTo('App\Challenges');
    }
}
