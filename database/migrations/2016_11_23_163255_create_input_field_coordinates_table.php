<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInputFieldCoordinatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('input_field_coordinates', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('pdf_x');
			$table->integer('pdf_y');
			$table->integer('pdf_length');
			$table->integer('pdf_height');
			$table->integer('css_left');
			$table->integer('css_top');
			$table->integer('css_width');
			$table->integer('css_height');
			$table->integer('page');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('input_field_coordinates');
	}

}
