<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentInputFieldsInputFieldCoordinatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_input_fields_input_field_coordinates', function(Blueprint $table)
		{
			$table->foreign('document_input_field_id', 'fk_document_input_field_input_field_coordinate')->references('id')->on('document_input_fields')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('input_field_coordinate_id', 'fk_input_field_coordinate_document_input_field')->references('id')->on('input_field_coordinates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_input_fields_input_field_coordinates', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_input_field_input_field_coordinate');
			$table->dropForeign('fk_input_field_coordinate_document_input_field');
		});
	}

}
