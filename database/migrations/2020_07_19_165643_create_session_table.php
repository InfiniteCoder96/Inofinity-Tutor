<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionTable extends Migration {

	public function up()
	{
		Schema::create('session', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('ses_grd_id')->unsigned();
			$table->integer('ses_cls_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('session');
	}
}