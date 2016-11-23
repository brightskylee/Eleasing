<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentSetsLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_sets_locations', function(Blueprint $table)
		{
			$table->foreign('document_set_id', 'fk_document_set_location')->references('id')->on('document_sets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('location_id', 'fk_location_document_set')->references('id')->on('locations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_sets_locations', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_set_location');
			$table->dropForeign('fk_location_document_set');
		});
	}

}
