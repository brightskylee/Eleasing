<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentSigningEventsDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_signing_events_documents', function(Blueprint $table)
		{
			$table->foreign('document_id', 'fk_document_document_signing_event')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('document_signing_event_id', 'fk_document_signing_event_document')->references('id')->on('document_signing_events')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_signing_events_documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_document_signing_event');
			$table->dropForeign('fk_document_signing_event_document');
		});
	}

}
