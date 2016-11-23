<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmergencyContactsPhoneNumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_emergency_contacts_phone_numbers', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('phone_number_id')->unsigned()->index('fk_phone_number_id_idx');
			$table->bigInteger('emergency_contact_id')->unsigned()->index('fk_emergency_contact_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_emergency_contacts_phone_numbers');
	}

}
