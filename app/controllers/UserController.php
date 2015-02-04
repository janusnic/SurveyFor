<?php

class UserController extends BaseController {

	public function register()
	{
		return View::make('users.register',  array(
			'title' => 'Register on SurveyFor'
		));
	}

	public function profile()
	{	
		$survey_list = DB::table('surveys')->where('user_id', '=', Auth:: user()->id)->get();
		$survey_count_all = DB::table('surveys')->count();
		$survey_count_notpublished = DB::table('surveys')->where('status', '=', 0)->count();
		$survey_count_published = DB::table('surveys')->where('status', '=', 1)->count();
		$survey_count_unpublished = DB::table('surveys')->where('status', '=', 2)->count();
		return View::make('users.profile',  array(
			'title' => 'Welcome to SurveyFor'
		))->with('surveys_list', $survey_list)
		  ->with('surveys_count_all', $survey_count_all)
		  ->with('surveys_count_notpublished', $survey_count_notpublished)
		  ->with('surveys_count_published', $survey_count_published)
		  ->with('surveys_count_unpublished', $survey_count_unpublished);
	}


	public function create()
	{
		$validator = User::validate(Input::all());
		$messages = $validator->messages();
		if ($validator->fails()) {
			return Redirect::route('register')
				->withErrors($validator)
				->withInput();
		}
		else{
			User::create(array(
				'username' => Input::get('username'),
				'email' => Input::get('email'),
				'password' => Hash::make(Input::get('password1'))
			));
			return Redirect::route('login')
				->with('message', 'Thanks for Registering. You can login now')
				->with('class', 'alert-success');
		}
		
	}

	public function login()
	{
		if(Input::get('remember')=="true"){
			$remember_me = "true";
		}
		else{
			$remember_me = "false";
		}
		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')),$remember_me)) {
		    return Redirect::intended();
		} 
		else {
		    return Redirect::to('login')
		        ->with('message', 'Login failed. Incorrect username or password.')
				->with('class', 'alert-danger')
		        ->withInput();
		}
		
	}

	public function getLogout() {
	    Auth::logout();
	    return Redirect::route('login')
	    	->with('message', 'Your are now logged out!')
	    	->with('class', 'alert-success');
	}

}
