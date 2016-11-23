<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentTemplatesDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_templates_documents', function(Blueprint $table)
		{
			$table->foreign('document_id', 'fk_document_document_template')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_template_id', 'fk_document_template_document')->references('id')->on('document_templates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_templates_documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_document_template');
			$table->dropForeign('fk_document_template_document');
		});
	}

}
