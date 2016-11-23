<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentTypesDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_types_documents', function(Blueprint $table)
		{
			$table->foreign('document_id', 'fk_document_document_type')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_type_id', 'fk_document_type_document')->references('id')->on('document_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_types_documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_document_type');
			$table->dropForeign('fk_document_type_document');
		});
	}

}
