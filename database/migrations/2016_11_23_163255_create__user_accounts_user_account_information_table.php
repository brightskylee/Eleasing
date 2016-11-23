<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserAccountsUserAccountInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('_user_accounts_user_account_information', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('user_account_id')->unsigned()->nullable()->index('fk_user_account_user_account_information_idx');
			$table->bigInteger('user_account_information_id')->unsigned()->nullable()->index('fk_user_account_information_user_account_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('_user_accounts_user_account_information');
	}

}
