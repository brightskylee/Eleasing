<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentInputFieldsLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_input_fields_leases', function(Blueprint $table)
		{
			$table->foreign('document_input_field_id', 'fk_document_input_field_lease')->references('id')->on('document_input_fields')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_lease_document_input_field')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_input_fields_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_input_field_lease');
			$table->dropForeign('fk_lease_document_input_field');
		});
	}

}
