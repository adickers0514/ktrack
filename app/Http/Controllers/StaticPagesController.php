<?php namespace KalaheoTrack\Http\Controllers;

use KalaheoTrack\Http\Requests;
use KalaheoTrack\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticPagesController extends Controller {


	public function index()
	{
		return view('Static.index');
	}

    public function contact()
    {
        return view('Static.contact');
    }

    public function trainingplan() {

        return response()->download( public_path() . '/training/march_middle_distance_distance_training_plan_kalaheo_2015.pdf', 'march_middle_distance_distance_training_plan_kalaheo_2015.pdf', ['content-type'=>'application/pdf']);
    }

}
