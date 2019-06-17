<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    //
    public function question()
    {
        //     Answer belongs to Question
        return $this->belongsTo('App\Question');
    }

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
}
