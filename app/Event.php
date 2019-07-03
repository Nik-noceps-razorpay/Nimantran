<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'name', 'details', 'location' ,'dateTime'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('invite_id');
    }
}
