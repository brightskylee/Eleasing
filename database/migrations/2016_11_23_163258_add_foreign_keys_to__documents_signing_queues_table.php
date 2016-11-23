<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDocumentsSigningQueuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_documents_signing_queues', function(Blueprint $table)
		{
			$table->foreign('document_id', 'fk_document_signing_queue')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('signing_queue_id', 'fk_signing_queue_document')->references('id')->on('signing_queues')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_documents_signing_queues', function(Blueprint $table)
		{
			$table->dropForeign('fk_document_signing_queue');
			$table->dropForeign('fk_signing_queue_document');
		});
	}

}
