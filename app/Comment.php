<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function subcomments()
    {
        return $this->hasMany('App\Subcomments');
    }
}
