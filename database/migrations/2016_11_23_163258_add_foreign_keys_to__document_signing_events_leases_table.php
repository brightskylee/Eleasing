<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentSigningEventsLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_signing_events_leases', function(Blueprint $table)
		{
			$table->foreign('document_signing_event_id', 'fk_document_signing_event_lease')->references('id')->on('document_signing_events')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_lease_document_signing_event')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_signing_events_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_signing_event_lease');
			$table->dropForeign('fk_lease_document_signing_event');
		});
	}

}
