<?php

class HomeController extends BaseController {

	public function index()
	{
		if (Auth::check())
		{
			return Redirect::route('profile',  array(
				'title' => 'Welcome to SurveyFor'
			));
		}else{
			return View::make('index',  array(
				'title' => 'Welcome to SurveyFor'
			));
		}
	}

	public function login()
	{
		return View::make('login',  array(
			'title' => 'Welcome to SurveyFor'
		));
	}

}
