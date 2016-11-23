<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentInputFieldsInputFieldCoordinatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_document_input_fields_input_field_coordinates', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('document_input_field_id')->unsigned()->nullable()->index('fk_document_input_field_input_field_coordinate_idx');
			$table->bigInteger('input_field_coordinate_id')->unsigned()->nullable()->index('fk_input_field_coordinate_document_input_field_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_document_input_fields_input_field_coordinates');
	}

}
