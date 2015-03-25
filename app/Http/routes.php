<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('logout',function() {
    Auth::logout();
    return Redirect::route('home');
});
Route::get('/', ['as' => 'home', 'uses' => 'StaticPagesController@index']);

Route::get('distance', 'StaticPagesController@trainingplan');
Route::get('home', 'StaticPagesController@index');

Route::get('profile/{id}', 'ProfileController@showProfile');

Route::get('getTeamPhones','PhoneChainController@getTeamPhones');

Route::get('contact','StaticPagesController@contact');
Route::get('practice', 'PracticeController@index');
Route::get('schedule', 'ScheduleController@index');
Route::get('register', 'RegistrationController@index');


Route::get('/results/{object}', 'ResultsController@getresults');

Route::get('showTeamMembers', 'TeamManagerController@showTeamMembers');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
