<?php namespace KalaheoTrack;

use Illuminate\Database\Eloquent\Model;

class School extends Model {

    protected $fillable = [
        'name'

    ];

    public function meets() {
        return $this->belongsToMany('KalaheoTrack\Meet', 'meet_schools');
    }

}
