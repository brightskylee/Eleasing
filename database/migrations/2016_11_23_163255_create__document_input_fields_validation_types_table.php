<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentInputFieldsValidationTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_document_input_fields_validation_types', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('document_input_field_id')->unsigned()->nullable()->index('fk_document_input_field_validation_type_idx');
			$table->bigInteger('validation_type_id')->unsigned()->nullable()->index('fk_validation_type_document_input_field_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_document_input_fields_validation_types');
	}

}
