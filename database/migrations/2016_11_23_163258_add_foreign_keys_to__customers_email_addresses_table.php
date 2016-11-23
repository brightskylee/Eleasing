<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersEmailAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customers_email_addresses', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_customer_email_address')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('email_address_id', 'fk_email_address_customer')->references('id')->on('email_addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customers_email_addresses', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_email_address');
			$table->dropForeign('fk_email_address_customer');
		});
	}

}
