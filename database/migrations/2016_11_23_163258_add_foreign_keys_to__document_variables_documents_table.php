<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentVariablesDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_variables_documents', function(Blueprint $table)
		{
			$table->foreign('document_id', 'fk_document_document_variable')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_variable_id', 'fk_document_variable_document')->references('id')->on('document_variables')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_variables_documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_document_variable');
			$table->dropForeign('fk_document_variable_document');
		});
	}

}
