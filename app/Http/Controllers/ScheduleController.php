<?php namespace KalaheoTrack\Http\Controllers;

use KalaheoTrack\Meet;

use KalaheoTrack\Http\Requests;
use KalaheoTrack\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ScheduleController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $meets = Meet::orderBy('date')->get();
		return view('Schedule.index', compact('meets'));
	}

}
