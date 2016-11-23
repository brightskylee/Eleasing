<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEmergencyContactsPhoneNumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_emergency_contacts_phone_numbers', function(Blueprint $table)
		{
			$table->foreign('emergency_contact_id', 'fk_emergency_contact_phone_number')->references('id')->on('emergency_contacts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('phone_number_id', 'fk_phone_number_emergency_contact')->references('id')->on('phone_numbers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_emergency_contacts_phone_numbers', function(Blueprint $table)
		{
			$table->dropForeign('fk_emergency_contact_phone_number');
			$table->dropForeign('fk_phone_number_emergency_contact');
		});
	}

}
