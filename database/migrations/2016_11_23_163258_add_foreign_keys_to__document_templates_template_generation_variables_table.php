<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentTemplatesTemplateGenerationVariablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_templates_template_generation_variables', function(Blueprint $table)
		{
			$table->foreign('document_template_id', 'fk_document_template_template_generation_variable')->references('id')->on('document_templates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('template_generation_variable_id', 'fk_template_generation_variable_document_template')->references('id')->on('template_generation_variables')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_templates_template_generation_variables', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_template_template_generation_variable');
			$table->dropForeign('fk_template_generation_variable_document_template');
		});
	}

}
