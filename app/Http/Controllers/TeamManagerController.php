<?php namespace KalaheoTrack\Http\Controllers;

use KalaheoTrack\User;

use KalaheoTrack\Http\Requests;
use KalaheoTrack\Http\Controllers\Controller;

use Illuminate\Http\Request;






class TeamManagerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showTeamMembers()
	{
		$Users = User::orderBy('lastname', 'ASC')->get();

        $output = "";

        //KalaheoTrack\School::create(["name" => "Aiea"]);



        foreach ($Users as $member) {
            $output .= $member->lastname.', '.$member->firstname." - ".$member->email."<br />";

        }

        return $output;


	}


}
