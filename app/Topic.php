<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content','version','tags',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comments');
    }

    public function category()
    {
        return $this->hasOne('App\Category');
    }

    public function solved()
    {
        return $this->hasOne('App\Solved');
    }
}
