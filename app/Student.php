<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $fillable = ['student_firstname', 'student_lastname', 'gender', 'joined_year','classroom_id'];

    public function classroom(){
        return $this->belongsTo('App\Classroom');
    }
}
