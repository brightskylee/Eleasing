<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentSetsDocumentTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_document_sets_document_templates', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('document_set_id')->unsigned()->nullable()->index('fk_document_set_document_template_idx');
			$table->bigInteger('document_template_id')->unsigned()->nullable()->index('fk_document_template_document_set_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_document_sets_document_templates');
	}

}
