<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questions', function($table){
			$table->increments('question_id');
			$table->integer('the_survey_id')->unsigned();
			$table->string('question');
			$table->string('question_type');
			$table->string('option_name')->nullable();
			$table->foreign('the_survey_id')->references('survey_id')->on('surveys')->onDelete('cascade');
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
		Schema::drop('questions');
	}

}
