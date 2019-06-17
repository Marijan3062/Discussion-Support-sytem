<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    public function answers()
    {
        //   Question has many Answer
        return $this->hasMany('App\Answer');
    }
}
