<?php namespace KalaheoTrack;

use Illuminate\Database\Eloquent\Model;

class MeetSchool extends Model {

    protected $fillable = [
        'school_id',
        'meet_id'
    ];

    public function schools() {
        return $this->hasMany('KalaheoTrack\School');
    }

    public function meets() {
        return $this->hasMany('KalaheoTrack\Meet');
    }
}
