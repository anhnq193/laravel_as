<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function attendanceDetail(){
        return $this->hasMany('App/AttendanceDetail');
    }
    public function class(){
        return $this->belongsToMany('App\Class', 'student_classes', 'student_id', 'class_id');
    }
}
