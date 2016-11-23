<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParkingAddendumsParkingCertificatesOfCompletionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_parking_addendums_parking_certificates_of_completion', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->bigInteger('parking_addendum_id')->nullable();
			$table->bigInteger('parking_certificate_of_completion_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_parking_addendums_parking_certificates_of_completion');
	}

}
