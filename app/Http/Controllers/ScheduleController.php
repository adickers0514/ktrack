<?php namespace KalaheoTrack\Http\Controllers;

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
		return view('Schedule.index');
	}

}
