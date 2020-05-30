<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    protected $guarded = [];

    public function candidates(){
        return $this->belongsToMany(\App\User::class,'candidate_election')->withTimestamps();
    }

    public function votes(){
        return $this->hasManyThrough('App\Vote','App\User');
    }
}
