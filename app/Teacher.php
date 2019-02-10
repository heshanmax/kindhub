<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    public function classes(){
        $this->hasMany('App\Myclass');
    }
}
