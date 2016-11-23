<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentTemplatesTemplateInputFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_templates_template_input_fields', function(Blueprint $table)
		{
			$table->foreign('document_template_id', 'fk_document_template_template_input_field')->references('id')->on('document_templates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('template_input_field_id', 'fk_template_input_field_document_template')->references('id')->on('template_input_fields')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_templates_template_input_fields', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_template_template_input_field');
			$table->dropForeign('fk_template_input_field_document_template');
		});
	}

}
