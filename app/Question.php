<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $fillable = [
        'question', 'has_answer','answer',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
