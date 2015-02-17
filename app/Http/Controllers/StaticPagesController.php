<?php namespace KalaheoTrack\Http\Controllers;

use KalaheoTrack\Http\Requests;
use KalaheoTrack\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StaticPagesController extends Controller {


	public function index()
	{
		return view('Static.index');
	}



}
