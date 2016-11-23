<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersEmergencyContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customers_emergency_contacts', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_customer_emergency_contact')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('emergency_contact_id', 'fk_emergency_contact_customer')->references('id')->on('emergency_contacts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customers_emergency_contacts', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_emergency_contact');
			$table->dropForeign('fk_emergency_contact_customer');
		});
	}

}
