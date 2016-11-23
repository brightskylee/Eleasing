<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAppointmentsCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_appointments_customers', function(Blueprint $table)
		{
			$table->foreign('appointment_id', 'fk_appointment_customer')->references('id')->on('appointments')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('customer_id', 'fk_customer_appointment')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_appointments_customers', function(Blueprint $table)
		{
			$table->dropForeign('fk_appointment_customer');
			$table->dropForeign('fk_customer_appointment');
		});
	}

}
