<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentVersionsLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_versions_leases', function(Blueprint $table)
		{
			$table->foreign('document_version_id', 'fk_document_version_lease')->references('id')->on('document_versions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_lease_document_version')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_versions_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_version_lease');
			$table->dropForeign('fk_lease_document_version');
		});
	}

}
