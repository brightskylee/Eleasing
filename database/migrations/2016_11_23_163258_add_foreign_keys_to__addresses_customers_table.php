<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAddressesCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_addresses_customers', function(Blueprint $table)
		{
			$table->foreign('address_id', 'fk_address_customer')->references('id')->on('addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('customer_id', 'fk_customer_address')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_addresses_customers', function(Blueprint $table)
		{
			$table->dropForeign('fk_address_customer');
			$table->dropForeign('fk_customer_address');
		});
	}

}
