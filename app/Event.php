<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'name', 'details', 'location' ,'datetime'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('status','response')->withTimestamps();
    }
}
