<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParkingCertificatesOfCompletionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parking_certificates_of_completion', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->dateTime('accepted_electronic_agreement_datetime')->nullable();
			$table->dateTime('unsigned_datetime')->nullable();
			$table->string('unsigned_hash', 100)->nullable();
			$table->dateTime('signed_datetime')->nullable();
			$table->string('tenant_ip', 25)->nullable();
			$table->string('signed_hash', 100)->nullable();
			$table->dateTime('completed_datetime')->nullable();
			$table->string('completed_hash', 100)->nullable();
			$table->string('agent_ip', 25)->nullable();
			$table->dateTime('initial_email_datetime')->nullable();
			$table->dateTime('completed_email_datetime')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parking_certificates_of_completion');
	}

}
