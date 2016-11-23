<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentOverrideTypesDocumentOverridesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_document_override_types_document_overrides', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('document_override_type_id')->nullable();
			$table->bigInteger('document_override_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_document_override_types_document_overrides');
	}

}
