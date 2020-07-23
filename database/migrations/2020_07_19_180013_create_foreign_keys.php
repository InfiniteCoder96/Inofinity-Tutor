<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('classes', function(Blueprint $table) {
			$table->foreign('cls_teach_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('session', function(Blueprint $table) {
			$table->foreign('ses_grd_id')->references('id')->on('grades')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('session', function(Blueprint $table) {
			$table->foreign('ses_cls_id')->references('id')->on('classes')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('subjects', function(Blueprint $table) {
			$table->foreign('sub_grd_id')->references('id')->on('grades')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('exams', function(Blueprint $table) {
			$table->foreign('ex_sub_id')->references('id')->on('subjects')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->foreign('res_exm_id')->references('id')->on('exams')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->foreign('res_std_id')->references('id')->on('students')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('classes', function(Blueprint $table) {
			$table->dropForeign('classes_cls_teach_id_foreign');
		});
		Schema::table('session', function(Blueprint $table) {
			$table->dropForeign('session_ses_grd_id_foreign');
		});
		Schema::table('session', function(Blueprint $table) {
			$table->dropForeign('session_ses_cls_id_foreign');
		});
		Schema::table('subjects', function(Blueprint $table) {
			$table->dropForeign('subjects_sub_grd_id_foreign');
		});
		Schema::table('exams', function(Blueprint $table) {
			$table->dropForeign('exams_ex_sub_id_foreign');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->dropForeign('results_res_exm_id_foreign');
		});
		Schema::table('results', function(Blueprint $table) {
			$table->dropForeign('results_res_std_id_foreign');
		});
	}
}