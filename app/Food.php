<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function brands()
    {
        return $this->belongsTo('App\Brand');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}
