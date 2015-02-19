<?php namespace KalaheoTrack;

use Illuminate\Database\Eloquent\Model;

class Meet extends Model {

	protected $fillable = [
        'title',
        'date',
        'start_time',
        'notes',

    ];



    public function schools() {
        return $this->belongsToMany('KalaheoTrack\School', 'meet_schools');
    }

    public function venue() {
        return $this->belongsTo('KalaheoTrack\School', 'location', 'id');
    }

}
