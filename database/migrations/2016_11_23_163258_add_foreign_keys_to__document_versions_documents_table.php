<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentVersionsDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_versions_documents', function(Blueprint $table)
		{
			$table->foreign('document_id', 'fk_document_document_version')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_version_id', 'fk_document_version_document')->references('id')->on('document_versions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_versions_documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_document_version');
			$table->dropForeign('fk_document_version_document');
		});
	}

}
