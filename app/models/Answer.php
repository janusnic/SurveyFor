<?php

class Answer extends Eloquent {
	protected $table = "answers";
	protected $fillable = array('answer_survey_id','answer');

}
