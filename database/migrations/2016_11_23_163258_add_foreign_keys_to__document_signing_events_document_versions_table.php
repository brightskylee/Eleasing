<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentSigningEventsDocumentVersionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_signing_events_document_versions', function(Blueprint $table)
		{
			$table->foreign('document_signing_event_id', 'fk_document_signing_event_document_version')->references('id')->on('document_signing_events')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_version_id', 'fk_document_version_document_signing_event')->references('id')->on('document_versions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_signing_events_document_versions', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_signing_event_document_version');
			$table->dropForeign('fk_document_version_document_signing_event');
		});
	}

}
