<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerAccountLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_account_logins', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->dateTime('datetime');
			$table->string('ip_address', 50);
			$table->text('user_agent', 65535);
			$table->boolean('success');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_account_logins');
	}

}
