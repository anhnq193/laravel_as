<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class extends Model
{
    public function attendanceSlot(){
        return $this->hasMany('App/AttendanceSlot');
    }

    public function student(){
        return $this->belongsToMany('App\Student', 'student_classes', 'class_id', 'student_id');
    }
}
