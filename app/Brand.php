<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function foods()
    {
        return $this->hasMany('App\Food');
    }
}
