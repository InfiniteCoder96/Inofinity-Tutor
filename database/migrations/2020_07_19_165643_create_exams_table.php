<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExamsTable extends Migration {

	public function up()
	{
		Schema::create('exams', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ex_sub_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('exams');
	}
}