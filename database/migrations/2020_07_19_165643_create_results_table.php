<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultsTable extends Migration {

	public function up()
	{
		Schema::create('results', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->integer('res_exm_id')->unsigned();
			$table->integer('res_std_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('results');
	}
}