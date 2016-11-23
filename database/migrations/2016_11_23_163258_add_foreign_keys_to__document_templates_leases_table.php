<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentTemplatesLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_templates_leases', function(Blueprint $table)
		{
			$table->foreign('document_template_id', 'fk_document_template_lease')->references('id')->on('document_templates')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_lease_document_template')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_templates_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_template_lease');
			$table->dropForeign('fk_lease_document_template');
		});
	}

}
