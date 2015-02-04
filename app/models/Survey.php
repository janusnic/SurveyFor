<?php

class Survey extends Eloquent {
	protected $table = "surveys";
	protected $fillable = array('user_id','title', 'description', 'status');

	public static $rules = array(
		'title' => 'required|max:60',
		'description' => 'required|max:300'
	);

	public static function validate($data){
		return Validator::make($data, static::$rules);
	}

}
