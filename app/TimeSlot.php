<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    //
    public function attendanceSlot(){
        return $this->hasMany('App/Class');
    }
}
