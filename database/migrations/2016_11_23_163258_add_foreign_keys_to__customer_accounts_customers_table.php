<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerAccountsCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customer_accounts_customers', function(Blueprint $table)
		{
			$table->foreign('customer_account_id', 'fk_customer_account_customer')->references('id')->on('customer_accounts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('customer_id', 'fk_customer_customer_account')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customer_accounts_customers', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_account_customer');
			$table->dropForeign('fk_customer_customer_account');
		});
	}

}
