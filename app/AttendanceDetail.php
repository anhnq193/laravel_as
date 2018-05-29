<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceDetail extends Model
{
    public function attendanceSlot(){
        return $this->belongsTo('App/AttendanceSlot');
    }

    public function student(){
        return $this->belongsTo('App/Student');
    }
}
