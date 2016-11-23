<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentTemplatesDocumentTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_templates_document_types', function(Blueprint $table)
		{
			$table->foreign('document_template_id', 'fk_document_template_document_type')->references('id')->on('document_templates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_type_id', 'fk_document_type_document_template')->references('id')->on('document_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_templates_document_types', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_template_document_type');
			$table->dropForeign('fk_document_type_document_template');
		});
	}

}
