<?php

class Question extends Eloquent {
	protected $table = "questions";
	protected $fillable = array('the_survey_id','question', 'question_type', 'option_name');
	public static $rules = array(
		'question' => 'required',
		'question_type' => 'required|in:text,textarea,checkbox,radio'
	);

	public static $rule_two = array();

	public static function validate($data){
		if (array_key_exists('option_name', $data)) {
	        for ($i = 0; $i < count($data['option_name']); $i++) {
	        	static::$rules["option_name.{$i}"] = 'required';
	    	}
	    }
		return Validator::make($data, static::$rules);
	}

	public static function validate_two($data){
		$messages = array(
		    'required' => 'This field is required.',
		);
	    foreach ($data as $key => $value) {
	    	static::$rule_two[$key] = 'required';	
	    }
		return Validator::make($data, static::$rule_two,$messages);
	}

}
