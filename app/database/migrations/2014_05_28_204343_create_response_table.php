<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('answers', function($table){
			$table->increments('answer_id');
			$table->integer('answer_survey_id')->unsigned();
			$table->string('respondent')->nullable();
			$table->string('answer');
			$table->foreign('answer_survey_id')->references('survey_id')->on('surveys')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('answers');
	}
}
