<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateElectronicSignaturePasscodesSigningQueuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_electronic_signature_passcodes_signing_queues', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('electronic_signature_passcode_id')->unsigned()->nullable()->index('fk_electronic_signature_passcode_signing_queue_idx');
			$table->bigInteger('signing_queue_id')->unsigned()->nullable()->index('fk_signing_queue_electronic_signature_passcode_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_electronic_signature_passcodes_signing_queues');
	}

}
