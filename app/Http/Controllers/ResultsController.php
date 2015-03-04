<?php namespace KalaheoTrack\Http\Controllers;

use KalaheoTrack\Http\Requests;
use KalaheoTrack\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResultsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

    public function getResults($filename)
    {


            //return response()->download( public_path() . '/results/', $filename, ['content-type'=>'application/pdf']);

        $file = public_path()."/results/".$filename;
        //$header = ['Content-Type'=> 'application/pdf'];
        return $file;

    }

    public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
