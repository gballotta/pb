<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBabesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('babes', function($table) {
			$table->increments('id');
			$table->string('name', 32);
			$table->string('surname', 32);
			$table->date('birthdate');
			$table->integer('height');
			$table->integer('weight');
			$table->integer('breasts');
			$table->integer('waist');
			$table->integer('hips');
			$table->integer('shoesize');
			$table->boolean('naturalboobs');
			$table->boolean('fucks');
			$table->string('photofile');
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
		Schema::drop('babes');
	}

}
