<?php

namespace App;

use Illuminate\Database\Eloquent\Model ;

class AttendanceSlot extends Model
{
    public function timeslot(){
        return $this->belongsTo('App/TimeSlot');
    }

    public function class(){
        return $this-> belongsTo('App/Class');
    }

    public function AttendanceDetail(){
        return $this->hasMany('App/AttendanceDetail');
    }
}
