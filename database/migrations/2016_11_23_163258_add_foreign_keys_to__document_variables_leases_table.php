<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentVariablesLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_variables_leases', function(Blueprint $table)
		{
			$table->foreign('document_variable_id', 'fk_document_variable_lease')->references('id')->on('document_variables')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_lease_document_variable')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_variables_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_variable_lease');
			$table->dropForeign('fk_lease_document_variable');
		});
	}

}
