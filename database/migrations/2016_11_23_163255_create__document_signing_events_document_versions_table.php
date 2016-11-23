<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentSigningEventsDocumentVersionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_document_signing_events_document_versions', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('document_signing_event_id')->unsigned()->nullable()->index('fk_document_signing_event_document_version_idx');
			$table->bigInteger('document_version_id')->unsigned()->nullable()->index('fk_document_version_document_signing_event_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_document_signing_events_document_versions');
	}

}
