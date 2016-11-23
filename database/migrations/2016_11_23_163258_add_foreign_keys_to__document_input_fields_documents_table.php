<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentInputFieldsDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_input_fields_documents', function(Blueprint $table)
		{
			$table->foreign('document_id', 'fk_document_document_input_field')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_input_field_id', 'fk_document_input_field_document')->references('id')->on('document_input_fields')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_input_fields_documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_document_input_field');
			$table->dropForeign('fk_document_input_field_document');
		});
	}

}
