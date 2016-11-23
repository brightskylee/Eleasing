<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsSigningQueuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_documents_signing_queues', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('document_id')->unsigned()->nullable()->index('fk_document_signing_queue_idx');
			$table->bigInteger('signing_queue_id')->unsigned()->nullable()->index('fk_signing_queue_document_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_documents_signing_queues');
	}

}
