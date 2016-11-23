<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateParkingCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parking_customers', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('email_address', 100)->nullable();
			$table->string('passcode', 25)->nullable()->unique('UniquePasscode');
			$table->date('birthday');
			$table->string('company', 30);
			$table->string('property', 20);
			$table->date('documents_completed_date');
			$table->integer('queue_position')->nullable();
			$table->dateTime('begin_sign_in_datetime')->nullable();
			$table->dateTime('finish_sign_in_datetime')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parking_customers');
	}

}
