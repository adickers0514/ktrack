<?php namespace KalaheoTrack\Http\Controllers;

use Carbon\Carbon;
use KalaheoTrack\Http\Requests;
use KalaheoTrack\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PracticeController extends Controller {


	public function index()
	{
        $today =   date("d F Y",strtotime(Carbon::now()));

		return view('Practice.index', compact('today'));
	}


}
