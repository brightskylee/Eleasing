<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmailAddressesEmergencyContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_email_addresses_emergency_contacts', function(Blueprint $table)
		{
			$table->foreign('email_address_id', 'fk_email_address_emergency_contact')->references('id')->on('email_addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('emergency_contact_id', 'fk_emergency_contact_email_address')->references('id')->on('emergency_contacts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_email_addresses_emergency_contacts', function(Blueprint $table)
		{
			$table->dropForeign('fk_email_address_emergency_contact');
			$table->dropForeign('fk_emergency_contact_email_address');
		});
	}

}
