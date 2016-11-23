<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentSigningEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('document_signing_events', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('ip_address', 45)->nullable();
			$table->string('user_agent')->nullable();
			$table->dateTime('timestamp')->nullable();
			$table->bigInteger('user_id')->nullable();
			$table->string('user_type', 45)->nullable();
			$table->string('electronic_disclosure_reference_id', 100)->nullable();
			$table->string('event_type', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('document_signing_events');
	}

}
