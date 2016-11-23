<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerAccountLoginsCustomerAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_customer_account_logins_customer_accounts', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('customer_account_login_id')->unsigned()->nullable()->index('fk_customer_account_login_id_idx');
			$table->bigInteger('customer_account_id')->unsigned()->nullable()->index('fk_customer_account_id_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_customer_account_logins_customer_accounts');
	}

}
