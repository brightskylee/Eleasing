<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentInputFieldsDocumentTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_input_fields_document_templates', function(Blueprint $table)
		{
			$table->foreign('document_input_field_id', 'fk_document_input_field_document_template')->references('id')->on('document_input_fields')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_template_id', 'fk_document_template_document_input_field')->references('id')->on('document_templates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_input_fields_document_templates', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_input_field_document_template');
			$table->dropForeign('fk_document_template_document_input_field');
		});
	}

}
