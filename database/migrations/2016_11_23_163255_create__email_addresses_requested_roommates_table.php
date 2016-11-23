<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailAddressesRequestedRoommatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_email_addresses_requested_roommates', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->integer('requested_roommate_id');
			$table->integer('email_address_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_email_addresses_requested_roommates');
	}

}
