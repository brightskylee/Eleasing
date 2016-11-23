<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentInputFieldsLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_document_input_fields_leases', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('document_input_field_id')->unsigned()->nullable()->index('fk_document_input_field_lease_idx');
			$table->bigInteger('lease_id')->unsigned()->nullable()->index('fk_lease_document_input_field_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_document_input_fields_leases');
	}

}
