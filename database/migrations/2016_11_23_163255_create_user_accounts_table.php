<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_accounts', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->boolean('webserver');
			$table->string('username', 40)->unique('username');
			$table->text('password', 65535);
			$table->string('salt', 22);
			$table->string('work_email_address', 40);
			$table->text('ip_address', 65535)->nullable();
			$table->boolean('activated');
			$table->dateTime('forgot_password_expiriation')->nullable();
			$table->dateTime('last_login_date')->nullable();
			$table->integer('failed_logins')->nullable()->default(0);
			$table->text('failed_login_ip', 65535)->nullable();
			$table->smallInteger('failed_logins_second_factor')->nullable();
			$table->boolean('locked')->nullable()->default(0);
			$table->boolean('banned')->default(0);
			$table->dateTime('ban_expiration')->nullable();
			$table->timestamp('account_creation_date')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->text('update_email_address', 65535)->nullable();
			$table->text('activation_token', 65535)->nullable();
			$table->text('forgot_password_token', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_accounts');
	}

}
