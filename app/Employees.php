<?php

namespace App;

use App\Attendance;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    public function getFullNameAttribute(){
        return "$this->first_name $this->middle_name $this->last_name";    }

    public function is_present($date){
       $attendance = Attendance::whereDate('attendance_date', $date)
                               ->where('user_id', $this->id)
                               ->first();
       if($attendance){
            return $attendance->is_present;
       }else{
           return false;
       }
    }
    public function attendances(){
        return $this->hasMany('App\Attendance');
    }
}
