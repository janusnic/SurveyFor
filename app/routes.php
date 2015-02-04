<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::pattern('id', '[0-9]+');

Route::get('/', array(
	'as'=>'default', 'uses' =>'HomeController@index'
));

Route::get('login', array(
	'as'=>'login', 'uses' =>'HomeController@login'
));

Route::get('users/register', array(
	'as'=>'register', 
	'uses'=>'UserController@register'
));

Route::get('users/logout', array( 
	'uses'=>'UserController@getLogout'
));

Route::get('survey/publish/{id}', array( 
	'uses'=>'SurveyController@publish'
));

Route::get('survey/unpublish/{id}', array( 
	'uses'=>'SurveyController@unpublish'
));

Route::get('survey/delete/{id}', array( 
	'uses'=>'SurveyController@delete'
));

Route::get('survey/add_question/{id}', array( 
	'as'=>'add_question', 
	'uses'=>'SurveyController@add_question'
))->before('auth');

Route::get('users/profile/', array(
	'as'=>'profile', 
	'uses'=>'UserController@profile'
))->before('auth');

Route::get('survey/create', array(
	'as'=>'createsurvey', 
	'uses'=>'SurveyController@create'
))->before('auth');

Route::post('survey/view/{id}', array(
	'uses'=>'SurveyController@save_survey'
));

Route::get('survey/view/{id}', array(
	'uses'=>'SurveyController@view_survey'
));

Route::post('users/register', array(
	'uses'=>'UserController@create'
));

Route::post('login', array(
	'uses'=>'UserController@login'
));
Route::post('survey/create', array( 
	'uses'=>'SurveyController@insert'
));
Route::post('survey/add_question/{id}', array( 
	'uses'=>'SurveyController@insert_question'
));

Route::get('survey/thank-you/{id}', array( 
	'uses'=>'SurveyController@thankyou'
));

Route::get('survey/settings/{id}', array( 
	'uses'=>'SurveyController@settings'
))->before('auth');