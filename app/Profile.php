<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bio', 'twitter','facebook','avatar','experiencia','is_admin','is_certified','user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
