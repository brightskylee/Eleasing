<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customer_accounts', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('email_address', 40);
			$table->integer('pin');
			$table->date('birthday')->nullable();
			$table->string('last_name', 30);
			$table->text('password', 65535);
			$table->string('salt', 22)->nullable();
			$table->string('ip_address', 25)->nullable();
			$table->boolean('activated')->default(0);
			$table->dateTime('forgot_password_expiriation')->nullable();
			$table->dateTime('last_login_date')->nullable();
			$table->integer('failed_logins')->nullable()->default(0);
			$table->boolean('locked')->nullable()->default(0);
			$table->boolean('banned')->default(0);
			$table->dateTime('ban_expiration')->nullable();
			$table->timestamp('account_creation_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('update_email_address', 40)->nullable();
			$table->string('activation_token', 32)->nullable();
			$table->string('forgot_password_token', 32)->nullable();
			$table->dateTime('last_forgot_password_datetime')->nullable();
			$table->boolean('is_active')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('customer_accounts');
	}

}
