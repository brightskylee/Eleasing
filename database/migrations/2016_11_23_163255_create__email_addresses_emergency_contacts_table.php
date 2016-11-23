<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailAddressesEmergencyContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_email_addresses_emergency_contacts', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('emergency_contact_id')->unsigned()->index('fk_emergency_contact_id_idx');
			$table->bigInteger('email_address_id')->unsigned()->index('fk_email_address_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_email_addresses_emergency_contacts');
	}

}
