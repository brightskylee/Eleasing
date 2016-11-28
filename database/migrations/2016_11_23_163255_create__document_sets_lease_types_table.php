<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentSetsLeaseTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_document_sets_lease_types', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('document_set_id')->unsigned()->nullable()->index('fk_document_set_lease_type_idx');
			$table->bigInteger('lease_type_id')->unsigned()->nullable()->index('fk_lease_type_document_set_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_document_sets_lease_types');
	}

}