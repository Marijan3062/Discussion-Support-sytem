<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    //
    public function answer()
    {
        return $this->belongsTo('App\Answer');
    }
    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
}
