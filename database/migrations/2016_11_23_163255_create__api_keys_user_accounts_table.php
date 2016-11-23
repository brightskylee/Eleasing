<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateApiKeysUserAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_api_keys_user_accounts', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned()->primary();
			$table->bigInteger('api_key_id')->unsigned()->nullable()->index('fk_api_key_user_account_idx');
			$table->bigInteger('user_account_id')->unsigned()->nullable()->index('fk_user_account_api_key_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_api_keys_user_accounts');
	}

}
