<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentTemplatesTemplateGenerationVariablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_document_templates_template_generation_variables', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('document_template_id')->unsigned()->nullable()->index('fk_document_template_template_generation_variable_idx');
			$table->bigInteger('template_generation_variable_id')->unsigned()->nullable()->index('fk_template_generation_variable_document_template_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_document_templates_template_generation_variables');
	}

}
