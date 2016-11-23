<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToElectronicSignaturePasscodesSigningQueuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_electronic_signature_passcodes_signing_queues', function(Blueprint $table)
		{
			$table->foreign('electronic_signature_passcode_id', 'fk_electronic_signature_passcode_signing_queue')->references('id')->on('electronic_signature_passcodes')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('signing_queue_id', 'fk_signing_queue_electronic_signature_passcode')->references('id')->on('signing_queues')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_electronic_signature_passcodes_signing_queues', function(Blueprint $table)
		{
			$table->dropForeign('fk_electronic_signature_passcode_signing_queue');
			$table->dropForeign('fk_signing_queue_electronic_signature_passcode');
		});
	}

}
