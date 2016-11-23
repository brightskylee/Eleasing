<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInputFieldCoordinatesTemplateInputFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_input_field_coordinates_template_input_fields', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('input_field_coordinate_id')->unsigned()->nullable()->index('fk_input_field_coordinate_template_input_field_idx');
			$table->bigInteger('template_input_field_id')->unsigned()->nullable()->index('fk_template_input_field_input_field_coordinate_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_input_field_coordinates_template_input_fields');
	}

}
