<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInputFieldCoordinatesTemplateInputFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_input_field_coordinates_template_input_fields', function(Blueprint $table)
		{
			$table->foreign('input_field_coordinate_id', 'fk_input_field_coordinate_template_input_field')->references('id')->on('input_field_coordinates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('template_input_field_id', 'fk_template_input_field_input_field_coordinate')->references('id')->on('template_input_fields')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_input_field_coordinates_template_input_fields', function(Blueprint $table)
		{
			$table->dropForeign('fk_input_field_coordinate_template_input_field');
			$table->dropForeign('fk_template_input_field_input_field_coordinate');
		});
	}

}
