<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcceptedElectronicDisclosureLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accepted_electronic_disclosure_logs', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('disclosure_reference_id');
			$table->boolean('accepted');
			$table->dateTime('accepted_datetime');
			$table->string('verification_number', 10)->nullable();
			$table->boolean('correct_verification_number')->nullable();
			$table->text('disclosure_html_base64', 65535)->nullable();
			$table->string('user_agent', 100)->nullable();
			$table->string('ip_address', 25)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accepted_electronic_disclosure_logs');
	}

}
