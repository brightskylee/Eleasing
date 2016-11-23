<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomersLeasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customers_leases', function(Blueprint $table)
		{
			$table->foreign('customer_id', 'fk_customer_lease')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('lease_id', 'fk_lease_customer')->references('id')->on('leases')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customers_leases', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_lease');
			$table->dropForeign('fk_lease_customer');
		});
	}

}
