<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhoneNumbersRequestedRoommatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_phone_numbers_requested_roommates', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('requested_roommate_id');
			$table->integer('phone_number_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_phone_numbers_requested_roommates');
	}

}
