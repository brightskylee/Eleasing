<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentSetsDocumentTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_sets_document_templates', function(Blueprint $table)
		{
			$table->foreign('document_set_id', 'fk_document_set_document_template')->references('id')->on('document_sets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_template_id', 'fk_document_template_document_set')->references('id')->on('document_templates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_sets_document_templates', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_set_document_template');
			$table->dropForeign('fk_document_template_document_set');
		});
	}

}
