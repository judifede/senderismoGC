<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solved extends Model
{
    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }
}
