<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerAccountLoginsCustomerAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('_customer_account_logins_customer_accounts', function(Blueprint $table)
		{
			$table->foreign('customer_account_id', 'fk_customer_account_customer_account_login')->references('id')->on('customer_accounts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('customer_account_login_id', 'fk_customer_account_login_customer_account')->references('id')->on('customer_account_logins')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('_customer_account_logins_customer_accounts', function(Blueprint $table)
		{
			$table->dropForeign('fk_customer_account_customer_account_login');
			$table->dropForeign('fk_customer_account_login_customer_account');
		});
	}

}
