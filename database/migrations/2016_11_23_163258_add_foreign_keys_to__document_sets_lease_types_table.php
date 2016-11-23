<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentSetsLeaseTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_sets_lease_types', function(Blueprint $table)
		{
			$table->foreign('document_set_id', 'fk_document_set_lease_type')->references('id')->on('document_sets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_type_id', 'fk_lease_type_document_set')->references('id')->on('lease_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_sets_lease_types', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_set_lease_type');
			$table->dropForeign('fk_lease_type_document_set');
		});
	}

}
