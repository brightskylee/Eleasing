<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentInputFieldsDocumentSigningEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_document_input_fields_document_signing_events', function(Blueprint $table)
		{
			$table->foreign('document_input_field_id', 'fk_document_input_field_document_signing_event')->references('id')->on('document_input_fields')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_document_input_fields_document_signing_events', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_input_field_document_signing_event');
		});
	}

}
