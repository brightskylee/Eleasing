<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersPhoneNumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customers_phone_numbers', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_customer_phone_number')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('phone_number_id', 'fk_phone_number_customer')->references('id')->on('phone_numbers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customers_phone_numbers', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_phone_number');
			$table->dropForeign('fk_phone_number_customer');
		});
	}

}
